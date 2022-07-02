<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../inc/headpages.php'; ?>
</head>
<body>
    <?php include '../inc/headerpages.php'; ?>
    <main>
        <div class="div_home_1">
            <h1 class="h1_home_1">Welcome</h1>
        </div>

        <div>
            <?php require_once "../php/main.php";?>
            <form action="./php/save_post.php" method="post" enctype="multipart/form-data">
                <div class="form">
                    <!--<h2>Preview Image Before Upload</h2>-->
                    <div class="grid">
                        <div class="form-element">
                            <input type="file" id="file-1" name="input_files" accept="image/*, video/*">
                            <label for="file-1" id="file-1-preview">
                                <img src="./images/upload_image.jpg" alt="">
                                <div>
                                    <span>Select the cover image<br>(jpg, jpeg, png, gif)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="input_home_title" type="text" name="title" id="" placeholder="The title...." />
                        <input class="input_home_url" type="text" name="url" id="" placeholder="URL...."/>
                    <textarea class="textarea_home" rows="13" cols="50" name="text" placeholder="Enter a text...."></textarea>
                    <input type="text" class="timedata" id="timedata" name="timedata" value=""/>
                    <button class="input_home send">Publish</button>
                    <button type = "button" class="button_home add">+ Add something....</button>
                </div>
                <table border="1">
                    <tr>
                        <th>I.D.</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>I.P.</th>
                        <th>U.R.L.</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Images</th>
                        <th>Operation</th>
                    </tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button"class="button_home_modify">Modify</button><button type="button"class="button_home_delete">Delete</button>
                        </td>
                    <tr>
                </table>
            </form>
        </div>
    </main>
    <script>
   <!-- <script>
function previewBeforeUpload(id){
  document.querySelector("#"+id).addEventListener("change",function(e){
    if(e.target.files.length == 0){
      return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#"+id+"-preview div").innerText = file.name;
    document.querySelector("#"+id+"-preview img").src = url;
  });
}

previewBeforeUpload("file-1");
previewBeforeUpload("file-2");
previewBeforeUpload("file-3");
    </script>-->

    <?php include './inc/script.php'; ?>
</body>
</html>