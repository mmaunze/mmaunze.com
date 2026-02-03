<?php
require_once __DIR__ . '/../config/bootstrap.php';

$page_title = "Contacto | Meldo Leonardo Maúnze - Engenheiro Informático";

get_part('head');
get_part('header');
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h1 class="text-4xl font-bold mb-4">Vamos <span class="text-brand-blue">Conversar?</span></h1>
            <p class="text-gray-600 dark:text-gray-400">Estou disponível para novos projectos, consultorias ou apenas para trocar ideias sobre tecnologia.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Contact Info -->
            <div class="lg:col-span-1 space-y-8">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <h3 class="text-xl font-bold mb-6">Informações de Contacto</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center shrink-0 text-brand-blue">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase font-bold mb-1">Email</p>
                                <a href="mailto:meldo@mmaunze.com" class="font-medium hover:text-brand-blue transition-colors">meldo@mmaunze.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center shrink-0 text-brand-blue">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase font-bold mb-1">Telefone</p>
                                <p class="font-medium">+258 842135644</p>
                                <p class="font-medium">+258 872135644</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center shrink-0 text-brand-blue">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase font-bold mb-1">Localização</p>
                                <p class="font-medium">Ponta do Ouro, Maputo, Moçambique</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-10 border-t border-gray-100 dark:border-gray-700">
                        <h4 class="font-bold mb-4">Redes Sociais</h4>
                        <div class="flex gap-4">
                            <a href="https://linkedin.com/in/mmaunze" target="_blank" class="w-10 h-10 rounded-full bg-gray-50 dark:bg-gray-900 flex items-center justify-center hover:text-brand-blue transition-colors">
                                <i data-lucide="linkedin" class="w-5 h-5"></i>
                            </a>
                            <a href="https://github.com/mmaunze" target="_blank" class="w-10 h-10 rounded-full bg-gray-50 dark:bg-gray-900 flex items-center justify-center hover:text-brand-blue transition-colors">
                                <i data-lucide="github" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-800 p-8 md:p-12 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <form id="contactForm" class="space-y-6">
                        <!-- Honeypot field (hidden) -->
                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-sm font-bold mb-2">Seu Nome *</label>
                                <input 
                                    type="text" 
                                    id="nome"
                                    name="nome" 
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:border-brand-blue transition-colors" 
                                    placeholder="Ex: João Silva">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-bold mb-2">Seu Email *</label>
                                <input 
                                    type="email" 
                                    id="email"
                                    name="email" 
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:border-brand-blue transition-colors" 
                                    placeholder="Ex: joao@email.com">
                            </div>
                        </div>
                        <div>
                            <label for="assunto" class="block text-sm font-bold mb-2">Assunto *</label>
                            <select 
                                id="assunto"
                                name="assunto" 
                                required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:border-brand-blue transition-colors">
                                <option value="">Seleccione um assunto</option>
                                <option value="Desenvolvimento de Software">Desenvolvimento de Software</option>
                                <option value="Consultoria ICT / Redes">Consultoria ICT / Redes</option>
                                <option value="Suporte Técnico">Suporte Técnico</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div>
                            <label for="mensagem" class="block text-sm font-bold mb-2">Mensagem *</label>
                            <textarea 
                                id="mensagem"
                                name="mensagem" 
                                rows="6" 
                                required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:border-brand-blue transition-colors" 
                                placeholder="Como posso ajudar?"></textarea>
                        </div>
                        <button 
                            type="submit" 
                            class="w-full md:w-auto bg-brand-blue text-white px-12 py-4 rounded-xl font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/20 flex items-center justify-center gap-2">
                            <span>Enviar Mensagem</span>
                            <i data-lucide="send" class="w-5 h-5"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Script do formulário -->
<script src="/js/contact-form.js"></script>

<?php get_part('footer'); ?>
