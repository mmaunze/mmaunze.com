/**
 * Handler do formulário de contacto
 * Envia via AJAX para processa-contacto.php
 */

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#contactForm');
    
    if (!form) return;

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        
        // Disable button e mostra loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 animate-spin inline-block"></i> Enviando...';
        
        // Recarrega ícones do Lucide (para o spinner)
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Limpa mensagens anteriores
        removeMessages();

        try {
            const formData = new FormData(form);
            
            const response = await fetch('/pages/processa-contacto.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                showMessage('success', data.message);
                form.reset();
            } else {
                showMessage('error', data.message || 'Erro ao enviar mensagem');
                
                // Mostra erros específicos se houver
                if (data.errors && Array.isArray(data.errors)) {
                    const errorList = '<ul class="mt-2 list-disc list-inside">' + 
                        data.errors.map(err => `<li>${err}</li>`).join('') + 
                        '</ul>';
                    showMessage('error', errorList, false);
                }
            }

        } catch (error) {
            console.error('Erro:', error);
            showMessage('error', 'Erro de conexão. Verifique sua internet e tente novamente.');
        } finally {
            // Restore button
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });

    /**
     * Mostra mensagem de feedback
     */
    function showMessage(type, message, autoDismiss = true) {
        const alertClass = type === 'success' 
            ? 'bg-green-50 dark:bg-green-900/20 text-green-800 dark:text-green-200 border-green-200 dark:border-green-800'
            : 'bg-red-50 dark:bg-red-900/20 text-red-800 dark:text-red-200 border-red-200 dark:border-red-800';

        const iconName = type === 'success' ? 'check-circle' : 'alert-circle';

        const alert = document.createElement('div');
        alert.className = `flex items-start gap-3 p-4 rounded-xl border ${alertClass} mb-6 animate-fade-in`;
        alert.innerHTML = `
            <i data-lucide="${iconName}" class="w-5 h-5 shrink-0 mt-0.5"></i>
            <div class="flex-1">${message}</div>
            <button type="button" class="shrink-0 hover:opacity-70 transition-opacity" onclick="this.parentElement.remove()">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        `;

        form.insertAdjacentElement('beforebegin', alert);

        // Recarrega ícones do Lucide
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Auto-dismiss após 5 segundos
        if (autoDismiss && type === 'success') {
            setTimeout(() => {
                alert.style.animation = 'fade-out 0.3s ease-out';
                setTimeout(() => alert.remove(), 300);
            }, 5000);
        }

        // Scroll suave até a mensagem
        alert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    /**
     * Remove mensagens existentes
     */
    function removeMessages() {
        const messages = document.querySelectorAll('.animate-fade-in');
        messages.forEach(msg => msg.remove());
    }
});

// Adiciona animações CSS se ainda não existirem
if (!document.querySelector('#contact-form-animations')) {
    const style = document.createElement('style');
    style.id = 'contact-form-animations';
    style.textContent = `
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fade-out {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
        
        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
    `;
    document.head.appendChild(style);
}
