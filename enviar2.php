<?php include("db.php")?>
<?php include("includes/header.php")?>


<!-- <h1>hola mundo</h1> -->


<div class="container p-4">
    <div class="row">

        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="post">
                    <div class="form-grup">
                        <input type="text" name="title" class=" form-control" placeholder="Titulo" autofocus>

                    </div>
                    <div class="form-grup">
                        <textarea name="description" rows="2" class="form-control" placeholder="Descripcion"></textarea>

                    </div>
                    <input type="submit" class="btn btn-success btn.block" name="save_task" value="SAVE Taske">
                </form>
            </div>
        </div>

        <div class="col-md-8">
            
        </div>

    </div>




</div>


<?php include("includes/footer.php")?>


    
    





