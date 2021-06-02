const drag = {
    'init' : (e) => {
                e.dataTransfer.setData('text/html', e.target.id);
                if (document.getElementById('completed').style.display = 'none') {
                    document.getElementById('completed').style.display = 'flex';   
                }
            },

    'drop' : (e) => {
                let id = e.dataTransfer.getData('text/html');
                let draggable = document.getElementById(id);
                let dropZone = e.target;
                dropZone.parentNode.parentNode.prepend(draggable);
                e.target.parentNode.style.background = 'none';
                document.getElementById('completed').style.display = 'none';
                e.dataTransfer.clearData();
            },

    'dragOver' : (e) => {
                e.preventDefault();
                e.target.parentNode.style.background = '#f8ead6';
            }
}

module.exports(Drag);

// console.log(drag.init('utibe'));
// function onDragStart(e){
//     e.dataTransfer.setData('text/html', e.target.id);
//     if (document.getElementById('completed').style.display = 'none') {
//         document.getElementById('completed').style.display = 'flex';   
//     } 
// }

// function onDrop(e){
//     let id = e.dataTransfer.getData('text/html');
//     let draggable = document.getElementById(id);
//     let dropZone = e.target;
//     dropZone.parentNode.parentNode.prepend(draggable);
//     e.target.parentNode.style.background = 'none';
//     document.getElementById('completed').style.display = 'none';
//     e.dataTransfer.clearData();
// }

// function onDragOver(e){
//     e.preventDefault();
//     e.target.parentNode.style.background = '#f8ead6';
// }