function validate(event) {
    event.preventDefault();

    let items = [];
    const form_items = event.target.elements;
    
    for (let i = 0; i < form_items.length; i++){
        let item = sortItems(form_items[i]);

        if (item !== 'no_item') {
            items[i] = item;
        }
    }

    handleItems(items);
}

function sortItems(item){
    let item_value;
    item.name != '' ? item_value = item : item_value = 'no_item';
    return item_value;
}