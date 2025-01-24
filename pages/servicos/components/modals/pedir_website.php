<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
                <div class="text-center">
                    <h4 class="mb-2">Pedido de Website</h4>
                    <p class="mb-6">Provide data with this form to create your app.</p>
                </div>

                <div id="wizard-create-app" class="bs-stepper vertical wizard-vertical-icons mt-2 shadow-none">

                    <div class="bs-stepper-content p-1">
                        <form onSubmit="return false">

                            <div id="details" class="content pt-4 pt-lg-0">
                                <div class="form-floating form-floating-outline mb-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        id="modalAppName"
                                        placeholder="Application Name" />
                                    <label for="modalAppName">Nome do Website</label>
                                </div>
                            </div>
                            <button class="btn btn-success btn-submit">
                                <span class="align-middle d-none d-sm-block me-2">Submit</span><i class="ri-check-line"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<button type="button" class="btn btn-info btn-outline-info" data-bs-toggle="modal" data-bs-target="#createApp">
    Solicitar Website
</button>