function toggleNewTaskForm(event){
    event.preventDefault();

    const new_task_modal = document.querySelector('.new-task-modal');

    new_task_modal.style.display === 'flex' 
        ?  newTaskModalHandler('close', new_task_modal)
            : newTaskModalHandler('open', new_task_modal);
    
}

window.addEventListener('click', (event) => {
    if (event.target === document.getElementById('user-modal')) {
        document.querySelector('.new-task-modal').style.display = 'none';   
    }
});

function newTaskModalHandler(type, new_task_modal) {
    if (type === 'open') {
        new_task_modal.style.display = 'flex';
        document.querySelector('body').style.overflow = 'hidden';   
        return;
    }

    new_task_modal.style.display = 'none';
    document.querySelector('body').style.overflow = 'scroll';
    return

}

function toggleModal(event, modal_content){
    event.preventDefault()

    const modal_wrapper = document.querySelector('.modal-wrapper');
    const content = document.querySelector(modal_content);

    modal_wrapper.style.display === 'flex'
        ? modalHandler('close', content, modal_wrapper)
            : modalHandler('open',content, modal_wrapper);
}

function modalHandler (action, content, modal_wrapper){
    console.log(content)
    if (action === 'open') {
        if(modal_wrapper.style.display === 'flex'){
            modal_wrapper.style.display = 'none';
            content.style.display = 'none'; 
            return;  
        }
        
        modal_wrapper.style.display = 'flex';
        content.style.display = 'flex'   
    }  
    
    if(action === 'close'){
        modal_wrapper.style.display = 'none'
        content.style.display = 'none'
    }
    
}

// Switch User Account
function toggleUserAccounts(event, displayed_form, hidden_form) {
    event.preventDefault();
    document.querySelector(displayed_form).style.display = 'none';
    document.querySelector(hidden_form).style.display = 'block';
}


async function processForm(event, action){
    event.preventDefault();

    let validateRequest = validate.check(event);
    let currentForm = event.target;

    if (validateRequest === true) {
        let formData = new FormData(currentForm);
        let response = await Request.post(formData, 'taskman/register');
        console.log(response)
    }

}



