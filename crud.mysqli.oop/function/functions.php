<?php

function successMsg(){
    if(isset($_GET['success'])){
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> New record inserted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             ';
    }
}

function updateMsg(){
    if(isset($_GET['updated'])){
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Alright!</strong> Record updated successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             ';
    }
}

function deleteMsg(){
    if(isset($_GET['deleted'])){
        echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Notice:</strong> Record deleted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             ';
    }
}
