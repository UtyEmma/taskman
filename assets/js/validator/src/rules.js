const Rules = {
    'empty' : (item) => {
        let status;
        item.value != '' ? status = true : status = false;

        return status;
    },

    'email-address' : (item) => {
        let status;
        let regEx = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let emailAddress = item.value.trim();
        
        if (regEx.test(emailAddress)) {
            status = true;
        } else{
            status = false;
        }

        return status;
    },

    'password' : (item) => {
        let status;
        let regEx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        let password = item.value.trim();

        regEx.test(password) 
            ? status = true
                : status = false;
        
        return status;
    },

    'confirm_password' : (item) => {
        let status;
        let ItemParent = item.parentElement.parentElement;
        let password;

        for(let child of ItemParent){
            if(child.name === 'password'){
                password = child;
            }
        }
        
        item.value ===  password.value
            ? status = true 
                : status = false;

        return status;
    } 

}

export default Rules;