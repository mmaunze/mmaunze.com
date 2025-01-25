<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
                <div class="text-center">
                    <h4 class="mb-2">Pedido de Website</h4>
                    <p class="mb-6">Preencha os dados neste formulário para solicitar a criação do seu website.</p>
                </div>

                <div id="wizard-create-app" class="bs-stepper vertical wizard-vertical-icons mt-2 shadow-none">

                    <div class="bs-stepper-content p-1">
                        <form id="websiteForm" onsubmit="return false">
                            <div class="row g-3">
                                <!-- Detalhes do Cliente (Nome, Email, Telefone) -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            id="clientName"
                                            placeholder="Nome do Cliente" />
                                        <label for="clientName">Nome do Cliente</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="email"
                                            class="form-control form-control-lg"
                                            id="clientEmail"
                                            placeholder="Email do Cliente" />
                                        <label for="clientEmail">Email do Cliente</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="tel"
                                            class="form-control form-control-lg"
                                            id="clientPhone"
                                            placeholder="Telefone do Cliente" />
                                        <label for="clientPhone">Telefone do Cliente</label>
                                    </div>
                                </div>

                                <!-- Nome e Tipo do Website -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            id="modalAppName"
                                            placeholder="Nome do Website" />
                                        <label for="modalAppName">Nome do Website</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select class="form-select form-select-lg" id="modalAppType">
                                            <option value="blog">Blog</option>
                                            <option value="portfolio">Portfólio</option>
                                            <option value="ecommerce">E-commerce</option>
                                            <option value="landing">Landing Page</option>
                                        </select>
                                        <label for="modalAppType">Tipo de Website</label>
                                    </div>
                                </div>

                                <!-- Domínio -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            id="domain"
                                            placeholder="Domínio (se já tiver)" />
                                        <label for="domain">Domínio</label>
                                    </div>
                                </div>

                                <!-- Gerenciamento de Conteúdo (CMS) -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select class="form-select form-select-lg" id="cms">
                                            <option value="none">Não</option>
                                            <option value="wordpress">WordPress</option>
                                            <option value="joomla">Joomla</option>
                                            <option value="custom">Personalizado</option>
                                        </select>
                                        <label for="cms">Gerenciamento de Conteúdo</label>
                                    </div>
                                </div>

                                <!-- Emails Personalizados -->
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input
                                            type="checkbox"
                                            class="form-check-input"
                                            id="emailCustom"
                                            value="yes" />
                                        <label class="form-check-label" for="emailCustom">Incluir E-mails Personalizados</label>
                                    </div>
                                </div>

                                <!-- Funcionalidades -->
                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            id="modalAppFeatures"
                                            placeholder="Funcionalidades Específicas"
                                            autocomplete="on" />
                                        <label for="modalAppFeatures">Funcionalidades Específicas</label>
                                    </div>
                                </div>

                                <!-- Descrição do Website -->
                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline">
                                        <textarea
                                            class="form-control form-control-lg"
                                            id="modalAppDescription"
                                            placeholder="Descrição do Website"
                                            rows="9"></textarea>
                                        <label for="modalAppDescription">Descrição do Website</label>
                                    </div>
                                </div>

                                <!-- Escolher Prazo de Entrega -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            id="modalAppDeadline"
                                            placeholder="Prazo de Entrega" />
                                        <label for="modalAppDeadline">Prazo de Entrega</label>
                                    </div>
                                </div>

                                <!-- Layout e Cores -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select class="form-select form-select-lg" id="layout">
                                            <option value="minimal">Minimalista</option>
                                            <option value="modern">Moderno</option>
                                            <option value="classic">Clássico</option>
                                            <option value="creative">Criativo</option>
                                        </select>
                                        <label for="layout">Layout</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select class="form-select form-select-lg" id="colors">
                                            <option value="light">Claro</option>
                                            <option value="dark">Escuro</option>
                                            <option value="custom">Personalizado</option>
                                        </select>
                                        <label for="colors">Cores</label>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-submit" id="submitBtn">
                                    <span class="align-middle d-none d-sm-block me-2">Enviar Pedido</span><i class="ri-check-line"></i>
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<button type="button" class="btn btn-primary btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createApp">
    Solicitar Website
</button>

<script>
    document.getElementById("submitBtn").addEventListener("click", function() {
        var nomeCliente = document.getElementById("clientName").value;
        var emailCliente = document.getElementById("clientEmail").value;
        var telefoneCliente = document.getElementById("clientPhone").value;
        var nomeWebsite = document.getElementById("modalAppName").value;
        var tipoWebsite = document.getElementById("modalAppType").value;
        var dominio = document.getElementById("domain").value;
        var cms = document.getElementById("cms").value;
        var emailCustom = document.getElementById("emailCustom").checked ? 'sim' : 'não';
        var funcionalidades = document.getElementById("modalAppFeatures").value;
        var descricao = document.getElementById("modalAppDescription").value;
        var prazo = document.getElementById("modalAppDeadline").value;
        var layout = document.getElementById("layout").value;
        var cores = document.getElementById("colors").value;

        // Validação básica
        if (!nomeCliente || !emailCliente || !telefoneCliente || !nomeWebsite || !tipoWebsite || !funcionalidades || !descricao || !prazo) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        var formData = new FormData();
        formData.append('nome_cliente', nomeCliente);
        formData.append('email_cliente', emailCliente);
        formData.append('telefone_cliente', telefoneCliente);
        formData.append('nome_website', nomeWebsite);
        formData.append('tipo_website', tipoWebsite);
        formData.append('dominio', dominio);
        formData.append('cms', cms);
        formData.append('email_custom', emailCustom);
        formData.append('funcionalidades', funcionalidades);
        formData.append('descricao', descricao);
        formData.append('prazo', prazo);
        formData.append('layout', layout);
        formData.append('cores', cores);

        // Enviar dados via AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "components/modals/processar_pedido.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status == "success") {
                    alert(response.message); // Exibe a mensagem de sucesso
                    $('#createApp').modal('hide'); // Fecha o modal
                } else {
                    alert(response.message); // Exibe a mensagem de erro
                }
            }
        };

        xhr.send(formData);
    });
</script>