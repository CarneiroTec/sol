// Sol Docs - Visual Enhancements Only
// No routing logic - PHP handles SSR

document.addEventListener('DOMContentLoaded', function () {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Fade-in animation for main content
    const content = document.querySelector('.content');
    if (content) {
        content.style.opacity = '0';
        content.style.transition = 'opacity 0.3s ease-in-out';
        requestAnimationFrame(() => {
            content.style.opacity = '1';
        });
    }

    // Code block copy button (optional enhancement)
    document.querySelectorAll('.code-block').forEach(block => {
        block.style.cursor = 'pointer';
        block.title = 'Clique para copiar';

        block.addEventListener('click', function () {
            const code = this.querySelector('pre').textContent;
            navigator.clipboard.writeText(code).then(() => {
                const original = this.style.borderColor;
                this.style.borderColor = '#22c55e';
                setTimeout(() => {
                    this.style.borderColor = original;
                }, 500);
            });
        });
    });
});
