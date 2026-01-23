<div class="container">
    <h1 class="text-warning mb-4">Bibliotecas Padrão</h1>

    <div class="row">
        <div class="col-md-6">
            <h3>🚀 Matemática</h3>
            <ul>
                <li><span class="func-name">matemática.pi</span>, <span class="func-name">matemática.enorme</span></li>
                <li><span class="func-name">matemática.obtenha_valor_absoluto(x)</span></li>
                <li><span class="func-name">matemática.obtenha_seno(x)</span>, <span class="func-name">obtenha_cosseno(x)</span>, <span class="func-name">obtenha_tangente(x)</span></li>
                <li><span class="func-name">matemática.obtenha_raiz_quadrada(x)</span></li>
                <li><span class="func-name">matemática.gere_aleatório(min, max)</span></li>
                <li><span class="func-name">matemática.arredonde_para_piso(x)</span>, <span class="func-name">arredonde_para_teto(x)</span></li>
                <li><span class="func-name">matemática.obtenha_máximo(...)</span>, <span class="func-name">obtenha_mínimo(...)</span></li>
            </ul>

            <h3>🚀 Texto</h3>
            <ul>
                <li><span class="func-name">texto.obtenha_comprimento(s)</span></li>
                <li><span class="func-name">texto.converta_para_maiúscula(s)</span>, <span class="func-name">converta_para_minúscula(s)</span></li>
                <li><span class="func-name">texto.obtenha_subtexto(s, i, j)</span></li>
                <li><span class="func-name">texto.encontre(s, padrão)</span></li>
                <li><span class="func-name">texto.substitua_globalmente(s, padrão, repl)</span></li>
                <li><span class="func-name">texto.repita(s, n)</span>, <span class="func-name">inverta(s)</span></li>
                <li><span class="func-name">texto.formate(fmt, ...)</span></li>
            </ul>

            <h3>🚀 Tabela</h3>
            <ul>
                <li><span class="func-name">tabela.crie(seq, hash)</span></li>
                <li><span class="func-name">tabela.insira(t, [pos], valor)</span></li>
                <li><span class="func-name">tabela.remova(t, [pos])</span></li>
                <li><span class="func-name">tabela.ordene(t, [comp])</span></li>
                <li><span class="func-name">tabela.concatene(t, [sep])</span></li>
                <li><span class="func-name">tabela.empacote(...)</span>, <span class="func-name">desempacote(t)</span></li>
                <li><span class="func-name">tabela.mova(t, f, e, dest)</span></li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>🚀 Terminal (E/S)</h3>
            <ul>
                <li><span class="func-name">terminal.leia([fmt])</span></li>
                <li><span class="func-name">terminal.escreva(...)</span></li>
                <li><span class="func-name">terminal.abra(arquivo, modo)</span></li>
                <li><span class="func-name">terminal.feche([arquivo])</span></li>
                <li><span class="func-name">terminal.itere_linhas(arquivo)</span></li>
                <li><span class="func-name">terminal.crie_arquivo_temporário()</span></li>
                <li><span class="func-name">arquivo:leia(fmt)</span>, <span class="func-name">arquivo:escreva(...)</span></li>
                <li><span class="func-name">arquivo:busque(modo, offset)</span></li>
            </ul>

            <h3>🚀? Sistema Operacional</h3>
            <ul>
                <li><span class="func-name">sistema_operacional.obtenha_data([fmt])</span></li>
                <li><span class="func-name">sistema_operacional.obtenha_tempo([tabela])</span></li>
                <li><span class="func-name">sistema_operacional.obtenha_relógio()</span></li>
                <li><span class="func-name">sistema_operacional.execute(cmd)</span></li>
                <li><span class="func-name">sistema_operacional.remova(arquivo)</span></li>
                <li><span class="func-name">sistema_operacional.renomeie(antigo, novo)</span></li>
                <li><span class="func-name">sistema_operacional.crie_pasta(nome)</span></li>
                <li><span class="func-name">sistema_operacional.obtenha_variável_ambiente(var)</span></li>
            </ul>

            <h3>🚀 UTF-8</h3>
            <ul>
                <li><span class="func-name">utf8.obtenha_comprimento(s)</span></li>
                <li><span class="func-name">utf8.obtenha_ponto_código(s, i, j)</span></li>
                <li><span class="func-name">utf8.crie_caractere(...)</span></li>
                <li><span class="func-name">utf8.obtenha_deslocamento(s, n, i)</span></li>
                <li><span class="func-name">utf8.itere_códigos(s)</span></li>
            </ul>

            <h3>🚀 Corrotinas</h3>
            <ul>
                <li><span class="func-name">corrotina.crie(f)</span></li>
                <li><span class="func-name">corrotina.retome(co, ...)</span></li>
                <li><span class="func-name">corrotina.ceda(...)</span></li>
                <li><span class="func-name">corrotina.obtenha_estado(co)</span></li>
                <li><span class="func-name">corrotina.envolva(f)</span></li>
                <li><span class="func-name">corrotina.verifique_pode_ceder()</span></li>
            </ul>
        </div>
    </div>
</div>
