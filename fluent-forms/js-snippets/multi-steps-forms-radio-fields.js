jQuery(document).ready(function($) {
    function validateRadioStep() {
        $('.fluentform-step.active').each(function() {
            var step = $(this);
            var nextButton = step.find('.ff-btn-next');

            var radioGroupNames = [];
            step.find('input[type="radio"]').each(function() {
                var name = $(this).attr('name');
                if (radioGroupNames.indexOf(name) === -1) {
                    radioGroupNames.push(name);
                }
            });

            var canProceed = true;

            for (var i = 0; i < radioGroupNames.length; i++) {
                var groupName = radioGroupNames[i];
                var yesSelected = step.find('input[name="' + groupName + '"][value="yes"]:checked, input[name="' + groupName + '"][value="Yes"]:checked').length > 0;

                if (!yesSelected) {
                    canProceed = false;
                    break;
                }
            }

            if (canProceed && radioGroupNames.length > 0) {
                nextButton.show();
            } else if (radioGroupNames.length > 0) {
                nextButton.hide();
            }
        });
    }

    validateRadioStep();
    $(document).on('change', 'input[type="radio"]', validateRadioStep);
    $(document).on('click', '.ff-btn-next, .ff-btn-prev', function() {
        setTimeout(validateRadioStep, 100);
    });
});
