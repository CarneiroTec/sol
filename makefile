# Developer's makefile for building Sol on Windows
# see sol_conf.int for further customization

# == CHANGE THE SETTINGS BELOW TO SUIT YOUR ENVIRONMENT =======================

# Warnings valid for both C and C++
CWARNSCPP= \
	-Wfatal-errors \
	-Wextra \
	-Wshadow \
	-Wundef \
	-Wwrite-strings \
	-Wredundant-decls \
	-Wdisabled-optimization \
	-Wdouble-promotion \
	-Wmissing-declarations \
	-Wconversion \
	-Wstrict-overflow=2 \
        # the next warnings might be useful sometimes,
	# but usually they generate too much noise
	# -Werror \
	# -pedantic   # warns if we use jump tables \
	# -Wformat=2 \
	# -Wcast-qual \


# Warnings for gcc, not valid for clang
CWARNGCC= \
	-Wlogical-op \
	-Wno-aggressive-loop-optimizations \


# The next warnings are neither valid nor needed for C++
CWARNSC= -Wdeclaration-after-statement \
	-Wmissing-prototypes \
	-Wnested-externs \
	-Wstrict-prototypes \
	-Wc++-compat \
	-Wold-style-definition \


CWARNS= $(CWARNSCPP) $(CWARNSC) $(CWARNGCC)

# Some useful compiler options for internal tests:
# -DSOL_ASSERT turns on all assertions inside Sol.
# -DHARDSTACKTESTS forces a reallocation of the stack at every point where
# the stack can be reallocated.
# -DHARDMEMTESTS forces a full collection at all points where the collector
# can run.
# -DEMERGENCYGCTESTS forces an emergency collection at every single allocation.
# -DEXTERNMEMCHECK removes internal consistency checking of blocks being
# deallocated (useful when an external tool like valgrind does the check).
# -DMAXINDEXRK=k limits range of constants in RK instruction operands.
# -DSOL_COMPAT_5_3

# -pg -malign-double
# -DSOL_USE_CTYPE -DSOL_USE_APICHECK

# The following options help detect "undefined behavior"s that seldom
# create problems; some are only available in newer gcc versions. To
# use some of them, we also have to define an environment variable
# ASAN_OPTIONS="detect_invalid_pointer_pairs=2".
# -fsanitize=undefined
# -fsanitize=pointer-subtract -fsanitize=address -fsanitize=pointer-compare
# TESTS= -DSOL_USER_H='"tests.int"' -Og -g


LOCAL = $(TESTS) $(CWARNS)


MYCFLAGS= $(LOCAL)
MYLDFLAGS= $(LOCAL)
MYLIBS=
LIB_O=	baselib.o dblib.o iolib.o mathlib.o oslib.o tablib.o strlib.o \
	utf8lib.o loadlib.o corolib.o init.o

# Windows-specific settings
CC= ctec
CFLAGS=
AR= ar rcs
RANLIB= ranlib
RM= del /Q
RMDIR= rmdir /S /Q
MKDIR= mkdir
EXE= .exe
LIB_EXT= .a


# == END OF USER SETTINGS. NO NEED TO CHANGE ANYTHING BELOW THIS LINE =========


LIBS = -lws2_32 

CORE_T=	libsol$(LIB_EXT)
CORE_O=	api.o code.o ctype.o debug.o do.o dump.o func.o gc.o lex.o \
	mem.o object.o opcodes.o parser.o state.o string.o table.o \
	tm.o undump.o vm.o zio.o biblioteca_assincronia.o parallellib.o tests.o lsplib.o
AUX_O=	auxlib.o
LIB_O=	baselib.o dblib.o iolib.o mathlib.o oslib.o tablib.o strlib.o \
	utf8lib.o loadlib.o corolib.o init.o testlib.o ndslib.o

SOL_T=	sol$(EXE)
SOL_O=	sol.o


ALL_T= $(CORE_T) $(SOL_T)
ALL_O= $(CORE_O) $(SOL_O) $(AUX_O) $(LIB_O)
ALL_A= $(CORE_T)

all:	$(ALL_T)
	@echo Build completo

o:	$(ALL_O)

a:	$(ALL_A)

$(CORE_T): $(CORE_O) $(AUX_O) $(LIB_O)
	$(AR) $@ $^
	$(RANLIB) $@

$(SOL_T): $(SOL_O) $(CORE_T)
	$(CC) -o $@ $(SOL_O) $(CORE_T) $(LIBS)


clean:
	-$(RM) $(ALL_T) $(ALL_O) 2>nul
	-$(RM) *.exe *.a *.o 2>nul

depend:
	@$(CC) $(CFLAGS) -MM *.ctec

echo:
	@echo CC = $(CC)
	@echo CFLAGS = $(CFLAGS)
	@echo AR = $(AR)
	@echo RANLIB = $(RANLIB)
	@echo RM = $(RM)
	@echo MYCFLAGS = $(MYCFLAGS)
	@echo MYLDFLAGS = $(MYLDFLAGS)
	@echo MYLIBS = $(MYLIBS)
	@echo DL = $(DL)

# Compilation rules
%.o: %.ctec
	$(CC) -c -o $@ $< $(CFLAGS) $(MYCFLAGS)

%.o: %.c
	$(CC) -c -o $@ $< $(CFLAGS) $(MYCFLAGS)

$(ALL_O): makefile tests.int

# Dependencies
# Generated manually based on original makefile but adapted for new names
# Note: Assuming includes are also renamed to .int manually in this list

api.o: api.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int debug.int do.int func.int gc.int string.int \
 table.int undump.int vm.int
auxlib.o: auxlib.ctec prefix.int sol.int sol_conf.int auxlib.int limits.int
baselib.o: baselib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
code.o: code.ctec prefix.int sol.int sol_conf.int code.int lex.int object.int \
 limits.int zio.int mem.int opcodes.int parser.int debug.int state.int tm.int \
 do.int gc.int string.int table.int vm.int opnames.int
corolib.o: corolib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
ctype.o: ctype.ctec prefix.int ctype.int sol.int sol_conf.int limits.int
dblib.o: dblib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int limits.int
debug.o: debug.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int code.int lex.int opcodes.int parser.int \
 debug.int do.int func.int string.int gc.int table.int vm.int
do.o: do.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int debug.int do.int func.int gc.int opcodes.int \
 parser.int string.int table.int undump.int vm.int
dump.o: dump.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int gc.int table.int undump.int
func.o: func.ctec prefix.int sol.int sol_conf.int debug.int state.int object.int \
 limits.int tm.int zio.int mem.int do.int func.int gc.int
gc.o: gc.ctec prefix.int sol.int sol_conf.int debug.int state.int object.int \
 limits.int tm.int zio.int mem.int do.int func.int gc.int lex.int string.int \
 table.int
init.o: init.ctec prefix.int sol.int sol_conf.int solib.int auxlib.int limits.int
iolib.o: iolib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int limits.int
lex.o: lex.ctec prefix.int sol.int sol_conf.int ctype.int limits.int debug.int \
 state.int object.int tm.int zio.int mem.int do.int gc.int lex.int parser.int \
 string.int table.int
mathlib.o: mathlib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
mem.o: mem.ctec prefix.int sol.int sol_conf.int debug.int state.int object.int \
 limits.int tm.int zio.int mem.int do.int gc.int
loadlib.o: loadlib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
object.o: object.ctec prefix.int sol.int sol_conf.int ctype.int limits.int \
 debug.int state.int object.int tm.int zio.int mem.int do.int string.int gc.int \
 vm.int
opcodes.o: opcodes.ctec prefix.int opcodes.int limits.int sol.int sol_conf.int \
 object.int
oslib.o: oslib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int limits.int
parser.o: parser.ctec prefix.int sol.int sol_conf.int code.int lex.int object.int \
 limits.int zio.int mem.int opcodes.int parser.int debug.int state.int tm.int \
 do.int func.int string.int gc.int table.int
state.o: state.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int debug.int do.int func.int gc.int lex.int \
 string.int table.int
string.o: string.ctec prefix.int sol.int sol_conf.int debug.int state.int \
 object.int limits.int tm.int zio.int mem.int do.int string.int gc.int
strlib.o: strlib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
table.o: table.ctec prefix.int sol.int sol_conf.int debug.int state.int object.int \
 limits.int tm.int zio.int mem.int do.int gc.int string.int table.int vm.int
tablib.o: tablib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
tests.o: tests.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int auxlib.int code.int lex.int opcodes.int \
 parser.int ctype.int debug.int do.int func.int opnames.int string.int gc.int \
 table.int solib.int
tm.o: tm.ctec prefix.int sol.int sol_conf.int debug.int state.int object.int \
 limits.int tm.int zio.int mem.int do.int gc.int string.int table.int vm.int
sol.o: sol.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int limits.int lsp.int
lsplib.o: lsplib.ctec prefix.int sol.int sol_conf.int auxlib.int lsp.int
undump.o: undump.ctec prefix.int sol.int sol_conf.int debug.int state.int \
 object.int limits.int tm.int zio.int mem.int do.int func.int string.int gc.int \
 table.int undump.int
utf8lib.o: utf8lib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int \
 limits.int
vm.o: vm.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int debug.int do.int func.int gc.int opcodes.int \
 string.int table.int vm.int jumptab.int
zio.o: zio.ctec prefix.int sol.int sol_conf.int api.int limits.int state.int \
 object.int tm.int zio.int mem.int

redelib.o: gps/fonte/redelib.ctec sol.int auxlib.int solib.int
	$(CC) -c -o $@ $< $(CFLAGS) $(MYCFLAGS) -I.


testlib.o: testlib.ctec sol.int auxlib.int solib.int
	$(CC) -c -o $@ $< $(CFLAGS) $(MYCFLAGS)

biblioteca_assincronia.o: biblioteca_assincronia.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int limits.int

ndslib.o: ndslib.ctec prefix.int sol.int sol_conf.int auxlib.int solib.int limits.int

