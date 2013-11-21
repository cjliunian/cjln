<?php if (!defined('THINK_PATH')) exit();?><form id="addmenu-fm" method="post" action="/index.php/Admin/Menu/addMenuSave" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar">父级：</td>
            <td>
                <input class="easyui-combotree" name="pid"
                    data-options="url:'/index.php/Admin/Menu/getMenuJson',width:300,required:true,novalidate:true,value:<?php echo ($id); ?>" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar">名称：</td>
            <td>
                <input class="easyui-validatebox" type="text" name="text"
                    data-options="required:true,novalidate:true" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar">链接：</td>
            <td>
                <input class="easyui-validatebox" type="text" name="url" data-options="required:true" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar">图标：</td>
            <td>
                <input class="easyui-validatebox" type="text" name="icon" data-options="" />
            </td>
        </tr>
    </table>

</form>