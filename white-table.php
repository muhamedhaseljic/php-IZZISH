<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 20px;
    padding-top:30px;
    background-color: #0d1017;
    min-height: 100vh;
    padding-bottom:0px;
}
    
    .container {
    width: 100%;
    max-width: 1500px; /* Limit the max width */
    display: flex;
    justify-content: center;
    padding-top: 20px;
}

.row {
    display: flex;
    gap: 20px; /* Space between columns */
}



.col {
    width: 260px;
    background-color: #161c21;
    padding: 10px;
    border: 1px solid #161c21;
    border-radius: 5px;
    min-height: 300px;
    max-height: 500px; /* Set a maximum height for the column */
    overflow-y: auto; /* Enable vertical scrolling if content overflows */
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    scrollbar-color: #8a1239 #212528;
  scrollbar-width: thin;
  color:white;
}

h3 {
    text-align: center;
    margin-bottom: 10px;
    color: white;
}

.task-card {
    display: flex;
    background-color: #0d1017;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: move;
    align-items: center;
    transition: transform 0.2s ease-in-out;
}
.task-card img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.task-details {
    display: flex;
    flex-direction: column;
}

.task-name {
    font-weight: bold;
    margin: 0;
}

.task-date {
    color: #666;
    margin: 5px 0 0 0;
    color: white;
}

/* Task being dragged has reduced opacity */
/* Task being dragged has reduced opacity */
.dragging {
    opacity: 0.5;
}

/* When dragging over another task, it moves slightly to make room */
.task-card.dragover {
    transform: translateY(15px); /* Move down by 15px */
    transition: transform 0.2s ease-in-out; /* Smooth movement */
}
/* When the task is marked as done, change background color */
.task-card.done {
    background-color: #d4edda; /* Light green for completed task */
    border-color: #c3e6cb;
    color:black;
}

/* Submit button container */
.submit-container {
    width: 100%;
    display: flex;
    justify-content: center;
    padding-bottom: 20px;
}

button#submitBtn {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
}

button#submitBtn:hover {
    background-color: #218838;
}

</style>

<div class="custom-main-content">
<div class="container">
        <div class="row">
            <div class="col" id="todo">
                <h3>Ponedjeljak</h3>
                <div class="task-card" draggable="true">
                    
                    <div class="task-details">
                        <p class="task-name">Sanitarna <br> Robot</p>
                        <p class="task-date">Adresa</p>
                        <label>
                            <input type="checkbox" class="done-checkbox"> Done
                        </label>
                    </div>
                </div>

                <div class="task-card" draggable="true">
                    <img src="path-to-image" alt="Profile">
                    <div class="task-details">
                        <p class="task-name">Task Name</p>
                        <p class="task-date">Due Date: 2024-08-31</p>
                        <label>
                            <input type="checkbox" class="done-checkbox"> Done
                        </label>
                    </div>
                </div>

                <div class="task-card" draggable="true">
                    <img src="path-to-image" alt="Profile">
                    <div class="task-details">
                        <p class="task-name">Task Name</p>
                        <p class="task-date">Due Date: 2024-08-31</p>
                        <label>
                            <input type="checkbox" class="done-checkbox"> Done
                        </label>
                    </div>
                </div>

            </div>
            <div class="col" id="in-progress">
                <h3>Utorak</h3>
                <div class="task-card" draggable="true">
                    <img src="path-to-image" alt="Profile">
                    <div class="task-details">
                        <p class="task-name">Task Name</p>
                        <p class="task-date">Due Date: 2024-08-31</p>
                        <label>
                            <input type="checkbox" class="done-checkbox"> Done
                        </label>
                    </div>
                </div>

                <div class="task-card" draggable="true">
                    <img src="path-to-image" alt="Profile">
                    <div class="task-details">
                        <p class="task-name">Task Name</p>
                        <p class="task-date">Due Date: 2024-08-31</p>
                        <label>
                            <input type="checkbox" class="done-checkbox"> Done
                        </label>
                    </div>
                </div>

                <div class="task-card" draggable="true">
                    <img src="path-to-image" alt="Profile">
                    <div class="task-details">
                        <p class="task-name">Task Name</p>
                        <p class="task-date">Due Date: 2024-08-31</p>
                        <label>
                            <input type="checkbox" class="done-checkbox"> Done
                        </label>
                    </div>
                </div>
            </div>
            <div class="col" id="testing">
                <h3>Srijeda</h3>
            </div>
            <div class="col" id="done">
                <h3>Četvrtak</h3>
            </div>
            <div class="col" id="done">
                <h3>Petak</h3>
            </div>
        </div>
    </div>

    <div class="submit-container">
        <button id="submitBtn">Submit</button>
    </div>
</div>
    <script>
        const taskCards = document.querySelectorAll('.task-card');
const columns = document.querySelectorAll('.col');

taskCards.forEach(card => {
    card.addEventListener('dragstart', dragStart);
    card.addEventListener('dragend', dragEnd);
});

columns.forEach(column => {
    column.addEventListener('dragover', dragOver);
    column.addEventListener('drop', drop);
});

let draggedItem = null;

function dragStart(event) {
    draggedItem = event.target;
    event.target.classList.add('dragging');
    setTimeout(() => {
        event.target.style.display = 'none'; // Hide the task being dragged
    }, 0);
}

function dragEnd(event) {
    event.target.classList.remove('dragging');
    event.target.style.display = 'block'; // Show the task again
    clearDragOverEffects();
    draggedItem = null;
}

function dragOver(event) {
    event.preventDefault();
    
    const afterElement = getDragAfterElement(event.currentTarget, event.clientY);

    clearDragOverEffects(); // Remove effects from all tasks before adding them to the new one
    
    if (afterElement == null) {
        event.currentTarget.appendChild(draggedItem);
    } else {
        event.currentTarget.insertBefore(draggedItem, afterElement);
        afterElement.classList.add('dragover'); // Add effect to the nearest task
    }
}

function drop(event) {
    event.preventDefault();
    draggedItem.style.display = 'block';
    clearDragOverEffects(); // Remove the visual cue
    draggedItem = null;
}

// Function to determine where the dragged item should be dropped
function getDragAfterElement(container, y) {
    const draggableElements = [...container.querySelectorAll('.task-card:not(.dragging)')];

    return draggableElements.reduce((closest, child) => {
        const box = child.getBoundingClientRect();
        const offset = y - box.top - box.height / 2;
        if (offset < 0 && offset > closest.offset) {
            return { offset: offset, element: child };
        } else {
            return closest;
        }
    }, { offset: Number.NEGATIVE_INFINITY }).element;
}

// Function to clear the dragover effect from all tasks
function clearDragOverEffects() {
    const allTasks = document.querySelectorAll('.task-card');
    allTasks.forEach(task => {
        task.classList.remove('dragover');
    });
}
// Adding event listeners to all task checkboxes
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.done-checkbox');
    
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const taskCard = this.closest('.task-card');
            
            if (this.checked) {
                taskCard.classList.add('done');
            } else {
                taskCard.classList.remove('done');
            }
        });
    });
});

    </script>