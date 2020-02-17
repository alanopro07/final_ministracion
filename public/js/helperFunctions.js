/*

    HELPER FUNCTIONS

*/

function DynamicForm(form_name) {

    const check_fieldSetIntegrity = () => {
        if (this.el.reportValidity()) {
            this.current_step = this.current_step == 5 ? true : ++this.current_step; 
            manage_els();
        }
        else { return; }
    },
        manage_els = () => {
            this.stepEls.forEach(fieldSet => {
                if (fieldSet.getAttribute('data-form-step') <= this.current_step) {
                    fieldSet.removeAttribute('disabled');
                }
                else { return; }
            });
        };

    this.el = document.querySelector(`form[name="${form_name}"]`);
    this.name = form_name;
    this.stepEls = this.el.querySelectorAll('fieldset[data-form-step]');
    this.current_step = 1;
    this.submit = event => {

        const request = new XMLHttpRequest(),
            data = new FormData(),
            get_value = targetName => {

                const target = this.el.querySelectorAll(`*[name="${targetName}"]`);

                if (target.length > 1) {
                    return Array.prototype.find.call(target, t => t.checked).value;
                }
                else if (target.length == 1) {
                    return target[0][(target[0].type == 'radio' || target[0].type == 'checkbox' ? 'checked' : 'value')];
                }
                else {
                    console.error('Invalid target.');
                    return false;
                }
            };

        event.preventDefault();
        for (let input of this.el.querySelectorAll('*[data-form-include]')) {
            if (!data.has(input.name)) { data.append(input.name, get_value(input.name)); }
            else { continue; }
        }
        request.onreadystatechange = () => {
            if (request.readyState == 4 && request.status == 200) {
                console.table(JSON.parse(request.response));
            }
            else { return; }
        };
        //
        request.open('POST', 'test.php', true);
        request.send(data);
    };

    for (let stepEl of this.stepEls) {
        if (stepEl.getAttribute('data-form-step') !== 0) { continue; }
        else {
            console.error('<fieldset> or wrapper element\'s "data-form-step" attribute cannot be zero or undefined');
        }
    }
    this.stepEls.forEach(fieldSet => {
        fieldSet.querySelector('button[type="button"]:last-of-type').addEventListener('click', check_fieldSetIntegrity, false);
        if (fieldSet.getAttribute('data-form-step') == this.current_step) { return; } 
        else { fieldSet.setAttribute('disabled', true); }
    });
    //this.el.addEventListener('submit', this.submit, false);
    //this.el.querySelector('input[type="submit"]').setAttribute('disabled', true);
}