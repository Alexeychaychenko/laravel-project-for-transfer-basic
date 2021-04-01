<tr id = {{"supplier_".$supplier->id."_table"}}>
    <td class = "text-center">{{$supplier->id}}</td>
    <td class = "text-center" id = {{"supplier_name_".$supplier->id}} contenteditable="false">{{$supplier->name}}</td>
    <td class = "text-center">{{$supplier->created_at}}</td>
    <td class = "text-center" id = {{"supplier_action_".$supplier->id}}>
        <i class="fas fa-edit" id = {{"supplier_edit_".$supplier->id}} style = "color:green;font-size:19px;margin-right:10px" onclick = "editSupplier({{$supplier->id}})"></i>
        <i class="fas fa-save" id = {{"supplier_save_".$supplier->id}} style = "color:green;font-size:19px;margin-right:10px;display: none" onclick = "saveSupplier({{$supplier->id}})"></i>
        <i class="fas fa-cancel" id = {{"supplier_cancel_".$supplier->id}} style = "color:red;font-size:19px;margin-right:10px;display: none" onclick = "cancelSupplier({{$supplier->id}})"></i>
        <i class="fa fa-times" id = {{"supplier_delete_".$supplier->id}} onclick = "deleteSupplier({{$supplier->id}})" style = "color:red;font-size:19px;margin-right:10px"></i>
    </td>
</tr>