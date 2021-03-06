<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="src/assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="src/assets/fonts/ionicons-2.0.1/ionicons-2.0.1/css/ionicons.css">
    <title>TaskMan - Simply and Easily Manage Activities</title>
</head>
<body>
    
    <div class='dashboard-wrapper'>
        
        <div class="modal-wrapper">
            <div class="modal">
                        <div class="new-category-form">
                            <h4>Create a new category - <small>Give it a color </small></h4>

                            <form action="">
                                <input type="text" class="category-name" placeholder="Category Name">
                                <input type="color" class="category-color" placeholder="Choose Color">
                                <a href="#"><button class="create-category-btn">Create Category</button></a>
                                <button class="modal-close btn-secondary" onclick="toggleModal(event,'.new-category-form')">Close</button>
                            </form>
                        </div>

                        <div class="task-detail-modal">

                            <div class="task-detail-body">
                                <div class="task-content">                                    
                                    <div class="task-content-heading">
                                        <div class="task-content-heading-top">
                                            <div class="task-due-date">
                                                <p class="due-date">Due Date: <span>24th June 2021</span></p>
                                                <a href="#"><i class="ion-calendar"></i></a>
                                            </div>
                                            
                                            <div class="task-content-meta">
                                                <select>
                                                    <option value="Uncategorized">Uncategorized</option>
                                                </select>

                                                <a href="#" title="Delete"><li><i class="ion-android-delete"></i></li></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="task-content-body">
                                        <div class="task-content-body-title">
                                            <h3>Sweep The Room</h3>
                                            <a href="#" title="Edit"><li><i class="ion-ios-compose"></i></li></a>
                                        </div>

                                        <div class="task-content-body-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ad? Lorem</p>
                                        </div>
                                    </div>

                                    <a href="#"><button class="mark-complete"><i class='ion-'></i>Mark as Complete</button></a>
                                    <button class="modal-close task-content-btn" onclick="toggleModal(event,'.task-detail-modal')">Close</button>
                                </div>
                            
                            </div>


                            <div class="task-detail-footer">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="new-task-modal" id='user-modal'>
            <div class="new-task">
                <div class="new-task-header">
                    <h2>Add a New Task</h2>
                    <a href="#" onclick="toggleModal(event, '.new-category-form')">New Category</a>
                </div>

                <div class="new-task-form">
                    <form method="POST">
                        <input type="text" class="task-title" placeholder="New Task">

                        <select class="task-category">
                            <option>Uncategorized</option>
                        </select>
                        
                        <textarea class="task-notes" rows="4" maxlength="120" placeholder="Write some notes..."></textarea>
                        
                        <input type="date" class="task-date">
                        <button type="button" class="btn">Add Task</button>
                    </form>
                </div>

                <div class="new-task-close">
                    <button class="new-task-close-btn btn-secondary" onclick="toggleNewTaskForm(event)">Cancel</button>
                </div>
            </div>
        </div>

        <div class='container'>

            <nav class='nav'>
                <div class='nav-brand'> Taskman </div>

                <div class='nav-bar'>
                    <ul class='nav-bar-menu'>
                        <a href='#' class='nav-bar-menu-item'><li>About</li></a>
                        <a href='#' class='nav-bar-menu-item'><li>Contact</li></a>
                        <a href='#' class='nav-bar-menu-item nav-bar-menu-btn btn'>Get Started</a>
                    </ul>
                </div>
            </nav>

            <section class="content-dashboard">

                <div class="content-dashboard-header">
                    <div class="">
                        <h1>ajjaj</h1>
                    </div>
                </div> 
                
                
                <div class="content-dashboard-body">

                    <div class="tasks">

                        <div class='tasks-action'>
                            <div class="tasks-action-new">
                                <a href='#' onclick='toggleNewTaskForm(event)'>
                                    <button>
                                        <i class='ion-ios-plus-outline'></i>
                                        <p>Add New Task</p>
                                    </button>
                                </a>
                            </div>
                        </div>


                        <div class="tasks-tables">

                            <div class="tasks-table tasks-table-pending">
                                <div class="tasks-table-header">
                                    <i class="ion-ios-paper-outline"></i>
                                    <h4>In Progress</h4>
                                    <a href="#">View All</a>
                                </div>

                                <div class="tasks-table-body">

                                    <!-- Single Task -->
                                    <div class="single-task" draggable="true" id='draggable'  ondragstart="onDragStart(event)">
                                        <div class="single-task-top">
                                            
                                            <h4>Sweep The Room  
                                                <br>     
                                                <small>Uncategorized <span>| 10 days ago</span></small>
                                            </h4>

                                            <div class="action-btns">
                                                <ul>
                                                    <a href="#" class="task-link" onclick="toggleModal(event, '.task-detail-modal')"><li><i class="ion-ios-eye"></i></li></a>
                                                    <a href="#" title="Delete"><li><i class="ion-android-delete"></i></li></a>
                                                    <a href="#" title="Edit"></href><li><i class="ion-ios-compose-outline"></i></li></a>
                                                </ul>
                                            </div>                                                        

                                        </div>

                                        <div class="single-task-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ad?</p>
                                        </div>

                                        <div class="single-task-bottom">
                                            <small class="task-due-date"><i class="ion-calendar"></i> 24th June 2021</small>
                                        
                                            <div class="update-task-status">
                                                <a href="#"><button>Mark as Complete</button></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Task -->
                                    <a href="#" class="task-link" >
                                        <div class="single-task"  draggable="true" id='drager'  ondragstart="onDragStart(event)">
                                            <div class="single-task-top">
                                                
                                                <h4>Sweep The Room  
                                                    <br>     
                                                    <small>Uncategorized <span>| 10 days ago</span></small>
                                                </h4>

                                                <div class="action-btns">
                                                    <ul>
                                                        <a href="#" title="Delete"><li><i class="ion-android-delete"></i></li></a>
                                                        <a href="#" title="Edit"></href><li><i class="ion-ios-compose-outline"></i></li></a>
                                                    </ul>
                                                </div>                                                        

                                            </div>
    
                                            <div class="single-task-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ad?</p>
                                            </div>

                                            <div class="single-task-bottom">
                                                <small class="task-due-date"><i class="ion-calendar"></i> 24th June 2021</small>
                                            
                                                <div class="update-task-status">
                                                    <a href="#"><button>Mark as Complete</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- Single Task -->
                                    <a href="#" class="task-link">
                                        <div class="single-task">
                                            <div class="single-task-top">
                                                
                                                <h4>Sweep The Room  
                                                    <br>     
                                                    <small>Uncategorized <span>| 10 days ago</span></small>
                                                </h4>

                                                <div class="action-btns">
                                                    <ul>
                                                        <a href="#" title="Delete"><li><i class="ion-android-delete"></i></li></a>
                                                        <a href="#" title="Edit"></href><li><i class="ion-ios-compose-outline"></i></li></a>
                                                    </ul>
                                                </div>                                                        

                                            </div>
    
                                            <div class="single-task-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ad?</p>
                                            </div>

                                            <div class="single-task-bottom">
                                                <small class="task-due-date"><i class="ion-calendar"></i> 24th June 2021</small>
                                            
                                                <div class="update-task-status">
                                                    <a href="#"><button>Mark as Complete</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                
                                </div>

                            </div>

                            <div class="tasks-table tasks-table-recent">
                                <div class="tasks-table-header">
                                    <i class="ion-ios-paper-outline"></i>
                                    <h4>Completed</h4>
                                    <a href="#">View All</a>
                                </div>

                                <div class="tasks-table-body" id="completed-tasks">                                  
                                    <div class="completedTask" id="completed" >
                                        <p id="dragText" ondragover="onDragOver(event)" ondrop="onDrop(event)">Drag Task Here to Complete</p>
                                    </div>
                                </div>
                            </div>
                        </div>

        
                    </div>   

                </div> 

                <div class="content-dashboard-footer">
                    
                </div> 

            </section>

    </div>

    
    <script type="text/javascript" src="src/assets/js/draggable.js"></script>
    <script type="text/javascript" src="src/assets/js/main.js" ></script>
</body>
</html>