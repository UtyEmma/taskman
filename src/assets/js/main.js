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
    if (event) {
        event.preventDefault();   
    }   
    document.querySelector(displayed_form).style.display = 'none';
    document.querySelector(hidden_form).style.display = 'block';
}


async function processForm(event, action){
    event.preventDefault();

    let validateRequest = validate.check(event);
    let data = event.target;
    let response = '';
    if (validateRequest) {
        response = await Request.post(data, `${action}`);
    }
    return response;
}

async function login(event){
    let response = await processForm(event, 'login');
    response.status 
    ?  window.location.href = 'dashboard' 
        : this.display(response.message, `#login`, response.status);
}

async function register(event){
    let response = await processForm(event, 'register');
    return registered(response);
}

function registered(response){
    if (response.status) {
        this.toggleUserAccounts('', '.sign-up', '.login');
        this.display(response.message, `#login`, response.status); 
        document.querySelector('#login-email-address').value = response.data.email;   
    }

    this.display(response.message, `#register`, response.status)
}

function display (message, selector, status){
    status ? color = 'green' : color = 'red';
    document.querySelector(selector).style.color = color;
    document.querySelector(selector).innerHTML = message;
}

function onDragStart(e){
    e.dataTransfer.setData('text/html', e.target.id);
    if (document.getElementById('completed').style.display = 'none') {
        document.getElementById('completed').style.display = 'flex';   
    } 
}

function onDrop(e){
    let id = e.dataTransfer.getData('text/html');
    let draggable = document.getElementById(id);
    let dropZone = e.target;
    dropZone.parentNode.parentNode.prepend(draggable);
    e.target.parentNode.style.background = 'none';
    document.getElementById('completed').style.display = 'none';
    e.dataTransfer.clearData();
}

function onDragOver(e){
    e.preventDefault();
    e.target.parentNode.style.background = '#f8ead6';
}


