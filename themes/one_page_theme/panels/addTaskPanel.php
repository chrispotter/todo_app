<!-- This piece is the area where user can add tasks to the todolist. -->
<form role="form" action="<?php echo Core_XMLConfig::getBaseUrl() . 'task/add';?>" method="post">
    <div class="form-group" id="addTaskFormGroupBody">
        <div class="input-group input-group-lg" id="addTaskFormGroupInputGroup">

            <input type="text" class="form-control" id="taskDescriptionTbox" name="taskDescriptionTbox" placeholder="Please Enter A Task Description..." autofocus="autofocus"/>

            <span class="input-group-btn">
              <input type="submit" class="btn btn-success" value="ADD">
            </span>

        </div>
    </div>
</form>


<!-- older pieces used when initially created.-->
<!-- original input text box       <input type="text" class="form-control" id="taskDescriptionTbox" name="taskDescriptionTbox" placeholder="Please Enter A Task Description..." autofocus="autofocus"/>-->
<!-- original submit button  <input type="submit" class="btn btn-success btn-lg" value="ADD"> -->


