    <main class="main_home">
    <a href="./logout.php" class="logout_button_link">Logout</a>
        <div class="div_home_1">
            <h1 class="h1_home_1">Welcome</h1>
        </div>

        <div class="">
            <?php require_once "../php/connect-clean-track.php";?>
            <div class="form-rest"></div>
            <form action="../php/save_post.php" method="post" class="FormAjax" enctype="multipart/form-data">
                <div class="form">
                    <!--<h2>Preview Image Before Upload</h2>-->
                    <div class="grid">
                        <div class="form-element">
                            <input type="file" id="file-1" name="input_files" accept="image/*, video/*">
                            <label for="file-1" id="file-1-preview">
                                <img src="../images/upload_image.jpg" alt="">
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
                    <button type="submit" class="input_home send">Publish</button>
                    <button type = "button" class="button_home add">+ Add something....</button>
                </div>
                <div class="tabs">
                    <label for="tab_posts_input"class="tab_posts">Posts</label>
                    <label for="tab_users_input"class="tab_users">Users</label>
                </div>
                <input type="radio"name="radio" id="tab_posts_input"checked="checked">
                <table class="table_posts" id="table_posts"border="1">
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
                <input type="radio"name="radio" id="tab_users_input">
                </table>
                <table class="table_users" id="table_users"border="1">
                    <tr>
                        <th>I.D.</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>I.P.</th>
                        <th>Gpu</th>
                        <th>Browser</th>
                        <th>Fingerprintjs</th>
                        <th>Fingerprint master</th>
                        <th>email</th>
                        <th>password</th>
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
                        <td></td>
                        <td></td>
                        <td><button type="button"class="button_home_modify">Modify</button><button type="button"class="button_home_delete">Delete</button>
                        </td>
                    <tr>
                </table>
            </form>
        </div>
    </main>