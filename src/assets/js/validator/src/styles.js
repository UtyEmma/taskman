const Styles = {

    'error' : (item, message) => {
        let style = item.style;
        style.border = '1px solid red';
        item.labels[0].innerHTML = message;
        item.labels[0].style.color = 'red';
    },

    'success' : (item) => {
        let style = item.style;
        style.border = '1px solid green';
        item.labels[0].innerHTML = '';
    }
}   

export default Styles;

