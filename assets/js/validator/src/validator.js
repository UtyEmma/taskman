import Message from './messages.js';
import Rules from './rules.js';

const Validator = {
    'check' : (event) =>{
        event.preventDefault();

        let items = [];
        const form_items = event.target.elements;

        
        for (let i = 0; i < form_items.length; i++){
            let item = Validator.sortValues(form_items[i]);

            if (item !== 'no_item') {
                items[i] = item;
            }
        }

        return Validator.checkIfEmpty(items)
    },

    'sortValues' :  (item) => {
        let item_value;
        item.name != '' ? item_value = item : item_value = 'no_item';
        return item_value;
    },

    'checkIfEmpty' : (items) => {
        let status = true;
        items.forEach((item) => {

            if (Rules.empty(item)) {
                let itemName = item.name;

                if(Rules[itemName](item)){
                    Message(item, itemName, true)
                } else{
                    Message(item, itemName, false);
                    return status = false;
                }
                
            }else{
                Message(item, 'empty', false);
                return status = false;
            }
        });

        return status;
    },

}

window.validate = Validator;