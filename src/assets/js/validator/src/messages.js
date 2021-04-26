import Styles from './styles.js'

const Messages = {

    'messages' : {
        'email-address' : 'Invalid Email Address',
        'empty' : 'This field is required',
        'password' : 'Password is not strong enough',
        'confirm_password' : 'Passwords Must Match'
    },

    'response' : (item, type, status, customMessage) => {
        if (status === false) {
            return Messages.error(item, type,customMessage);
        }else{
            Messages.success(item);
            return true;
        }
    },

    'error' : (item, type, customMessage) => {
        if (!customMessage) {
            return Styles.error(item, Messages.messages[type]);
        }
        return Styles.error(item, customMessage)
    },

    'success' : (item) => {
        return Styles.success(item)
    }
}

const Message = Messages.response;

export default  Message;