<div class="widget">
    <div class="widget-content">
        <div class="wizard-wrapper">
            <div class="container">
                <div class="row">
                    <div id="leadlist-upload-wizard" class="wizard">
                        <div class="steps-container">
                            @include('leadlist.partials.create.wizard-steps')
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="step-content">
                        <div class="step-pane active" id="step1">
                            @include('leadlist.partials.create.wizard-step-one')
                        </div>
                        <div class="step-pane" id="step2">
                            @include('leadlist.partials.create.wizard-step-two')
                        </div>
                        <div class="step-pane" id="step3">
                            @include('leadlist.partials.create.wizard-step-three')
                        </div>
                    </div>
                </div>
                <div class="actions row">
                    <button type="button" class="btn btn-default btn-prev"><i class="fa fa-arrow-left"></i> Prev</button>
                    <button type="button" class="btn btn-primary btn-next">Next <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
