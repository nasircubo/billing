
{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['Edit User']}</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="{$_url}settings/users-edit-post">
                    <div class="form-group">
                        <label for="username">{$_L['Username']}</label>
                        <input type="text" class="form-control" id="username" name="username" value="{$d['username']}">
                    </div>
                    <div class="form-group">
                        <label for="fullname">{$_L['Full Name']}</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{$d['fullname']}">
                    </div>
                    {if ($user['id']) neq ($d['id'])}
                        <div class="form-group">
                            <label for="user_type">User {$_L['Type']}</label>
                            <select name="user_type" id="user_type" class="form-control">
                                <option value="Admin" {if $d['user_type'] eq 'Admin'}selected="selected" {/if}>{$_L['Full Administrator']}</option>
                                <option value="Employee" {if $d['user_type'] eq 'Employee'}selected="selected" {/if}>{$_L['Employee']}</option>

                            </select>
                            <span class="help-block">{$_L['user_type_help']}</span>
                        </div>
                    {/if}
                    <div class="form-group">
                        <label for="password">{$_L['Password']}</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="help-block">{$_L['password_change_help']}</span>
                    </div>

                    <div class="form-group">
                        <label for="cpassword">{$_L['Confirm Password']}</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>

                    <input type="hidden" name="id" value="{$d['id']}">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button>
                    {$_L['Or']} <a href="{$_url}settings/users">{$_L['Cancel']}</a>
                </form>

            </div>
        </div>



    </div>



</div>




{include file="sections/footer.tpl"}
