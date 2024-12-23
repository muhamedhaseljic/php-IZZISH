<style>
.custom-main-content {
    margin-left: 0px; 
    width: 100%;
    padding: 100px;
    background-color: #ebeef5;
    min-height: 100vh;
    padding-bottom:0px;
    padding-right:50px;
    padding-left:50px;

}
    
    .container {
    width: 100%;
    max-width: 1800px; 
    display: flex;
    justify-content: center;
    padding-top: 20px;
}

.row {
    display: flex;
    gap: 20px;
}



.col {
    width: 240px;
    background-color: white;
    padding: 10px;
    padding-top:0;
    border: 1px solid #132650;
    border-radius: 5px;
    min-height: 300px;
    max-height: 500px; 
    overflow-y: auto; 
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    scrollbar-color: #132650 #ebeef5;
  scrollbar-width: thin;
  color:black;
}

.col h3 {
    text-align: center;
    margin-bottom: 10px;
    color: #132650;
    position: sticky;
  top: 0;
  background-color: #fff; 
  padding: 10px;
  z-index: 1; 
  border-bottom: 1px solid black; 
}

.task-card {
    display: flex;
    background-color: #ebeef5;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #132650;
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
    color: black;
    margin: 5px 0 0 0;
}
.dragging {
    opacity: 0.5;
}

.task-card.dragover {
    transform: translateY(15px); 
    transition: transform 0.2s ease-in-out; 
}
.task-card.done {
    background-color: #d4edda; 
    border-color: #c3e6cb;
    color:black;
}

.submit-container {
    width: 100%;
    display: flex;
    justify-content: center;
    padding-bottom: 20px;
}

button#submitBtn {
    padding: 20px 60px;
    font-size: 16px;
    cursor: pointer;
    background-color: #132650;
    color: white;
    border: none;
    border-radius: 5px;
    margin-top: 50px;
}

button#submitBtn:hover {
    background-color:#23355d;
}
#poslovi{
    background-color: #ecfeaa;
}
#poslovi h3 {

  background-color: #ecfeaa; 
    color:black;
}



</style>

<?php

if(isset($_SESSION['message'])) :?>
<div class="alert alert-<?= $_SESSION['message']['type'];?> alert-dismissible fade show" role="alert" id="success-popup">

    <?php
    
      echo $_SESSION['message']['text'];
      unset($_SESSION['message']);
    
    ?>
     <div class="progress-bar" id="progress-bar"></div>
</div>

<?php endif; ?>

<div class="custom-main-content content">
<div class="container">
        <div class="row">
        
            <div class="col" id="poslovi">
                <h3>Poslovi</h3>
                <?php $employee_data = $radnik->get_employee_data() ?>
                <?php $radnik_id = $employee_data['employee_id'] ?>
                <?php 
                
                $sql = "SELECT kupac.*
                  FROM `kupac` 
                  WHERE kupac.employee_id = $radnik_id && kupac.jobs_id =0
                  ORDER BY kupac.day_of_a_week, kupac.position";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    $select_members = $results;?>
                    
                    <?php foreach ($results as $kupci): ?>
                        <?php if ($kupci['day_of_a_week'] == 'poslovi'): ?>
                            <div class="task-card" draggable="true" data-task-id="<?= $kupci['customer_id'] ?>" data-day="poslovi">
                            <div class="task-details">
                                        <p class="task-name"><?=$kupci['objekat']?></p>
                                        <p class="task-date"><b>Ime: </b> <?php echo $kupci['first_name'] . " ". $kupci['last_name'] ?></p>
                                        <p class="task-date"><b>Servis: </b> <?=$kupci['service']?></p>
                                        <p class="task-date"> <b> Lokacija:</b> <?=$kupci['city'] ?></p>
                                    </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
            </div>

            <div class="col" id="ponedjeljak">
                <h3>Ponedjeljak</h3>
                <?php foreach ($results as $kupci): ?>
        <?php if ($kupci['day_of_a_week'] == 'ponedjeljak'): ?>
            <div class="task-card" draggable="true" data-task-id="<?= $kupci['customer_id'] ?>" data-day="ponedjeljak">
            <div class="task-details">
                                        <p class="task-name"><?=$kupci['objekat']?></p>
                                        <p class="task-date"><b>Ime: </b> <?php echo $kupci['first_name'] . " ". $kupci['last_name'] ?></p>
                                        <p class="task-date"><b>Servis: </b> <?=$kupci['service']?></p>
                                        <p class="task-date"> <b> Lokacija:</b> <?=$kupci['city'] ?></p>
                                    </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
            </div>

            <div class="col" id="utorak">
                <h3>Utorak</h3>
                <?php foreach ($results as $kupci): ?>
        <?php if ($kupci['day_of_a_week'] == 'utorak'): ?>
            <div class="task-card" draggable="true" data-task-id="<?= $kupci['customer_id'] ?>" data-day="utorak">
            <div class="task-details">
                                        <p class="task-name"><?=$kupci['objekat']?></p>
                                        <p class="task-date"><b>Ime: </b> <?php echo $kupci['first_name'] . " ". $kupci['last_name'] ?></p>
                                        <p class="task-date"><b>Servis: </b> <?=$kupci['service']?></p>
                                        <p class="task-date"> <b> Lokacija:</b> <?=$kupci['city'] ?></p>
                                    </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
                </div>

            <div class="col" id="srijeda">
                <h3>Srijeda</h3>
                <?php foreach ($results as $kupci): ?>
        <?php if ($kupci['day_of_a_week'] == 'srijeda'): ?>
            <div class="task-card" draggable="true" data-task-id="<?= $kupci['customer_id'] ?>" data-day="srijeda">
            <div class="task-details">
                                        <p class="task-name"><?=$kupci['objekat']?></p>
                                        <p class="task-date"><b>Ime: </b> <?php echo $kupci['first_name'] . " ". $kupci['last_name'] ?></p>
                                        <p class="task-date"><b>Servis: </b> <?=$kupci['service']?></p>
                                        <p class="task-date"> <b> Lokacija:</b> <?=$kupci['city'] ?></p>
                                    </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
            </div>
            <div class="col" id="cetvrtak">
                <h3>Četvrtak</h3>
                <?php foreach ($results as $kupci): ?>
        <?php if ($kupci['day_of_a_week'] == 'cetvrtak'): ?>
            <div class="task-card" draggable="true" data-task-id="<?= $kupci['customer_id'] ?>" data-day="cetvrtak">
            <div class="task-details">
                                        <p class="task-name"><?=$kupci['objekat']?></p>
                                        <p class="task-date"><b>Ime: </b> <?php echo $kupci['first_name'] . " ". $kupci['last_name'] ?></p>
                                        <p class="task-date"><b>Servis: </b> <?=$kupci['service']?></p>
                                        <p class="task-date"> <b> Lokacija:</b> <?=$kupci['city'] ?></p>
                                    </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
            </div>
            <div class="col" id="petak">
                <h3>Petak</h3>
                <?php foreach ($results as $kupci): ?>
        <?php if ($kupci['day_of_a_week'] == 'petak'): ?>
            <div class="task-card" draggable="true" data-task-id="<?= $kupci['customer_id'] ?>" data-day="petak">
            <div class="task-details">
                                        <p class="task-name"><?=$kupci['objekat']?></p>
                                        <p class="task-date"><b>Ime: </b> <?php echo $kupci['first_name'] . " ". $kupci['last_name'] ?></p>
                                        <p class="task-date"><b>Servis: </b> <?=$kupci['service']?></p>
                                        <p class="task-date"> <b> Lokacija:</b> <?=$kupci['city'] ?></p>
                                    </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="submit-container">
        <button id="submitBtn">Spremi</button>
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
        event.target.style.display = 'none'; 
    }, 0);
}

function dragEnd(event) {
    event.target.classList.remove('dragging');
    event.target.style.display = 'block';
    clearDragOverEffects();
    draggedItem = null;
}

function dragOver(event) {
    event.preventDefault();
    
    const afterElement = getDragAfterElement(event.currentTarget, event.clientY);

    clearDragOverEffects(); 
    
    if (afterElement == null) {
        event.currentTarget.appendChild(draggedItem);
    } else {
        event.currentTarget.insertBefore(draggedItem, afterElement);
        afterElement.classList.add('dragover'); 
    }
}

function drop(event) {
    event.preventDefault();
    draggedItem.style.display = 'block';
    clearDragOverEffects(); 
    draggedItem = null;
}

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

function clearDragOverEffects() {
    const allTasks = document.querySelectorAll('.task-card');
    allTasks.forEach(task => {
        task.classList.remove('dragover');
    });
}
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

// adding card to day_of_a_week

document.getElementById('submitBtn').addEventListener('click', function() {
    const updatedTasks = [];

    document.querySelectorAll('.col').forEach(column => {
        const dayOfWeek = column.id;  
        const tasksInColumn = column.querySelectorAll('.task-card');

        tasksInColumn.forEach((task, index) => {
            const taskId = task.dataset.taskId;  
            updatedTasks.push({
                id: taskId,
                day: dayOfWeek,
                position: index + 1
            });
        });
    });

    fetch('update_task_days.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(updatedTasks)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = "http://localhost/retro/radnik/pdf_radna_sedmica.php";
        } else {
            alert('Error updating tasks.');
        }
    })
    .catch(error => console.error('Error:', error));
});


    </script>