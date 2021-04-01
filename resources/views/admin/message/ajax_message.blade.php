<tr id = {{"massage-cell-".$message->id}}>
    <td class = "text-center">{{$message->id}}</td>
    <td class = "text-center">@if($message->touser == 1){{"all"}}@else{{$message->username}}@endif</td>
    <td class = "text-center">{{$message->content}}</td>
    <td class = "text-center">{{$message->created_at}}</td>
    <td class = "text-center">
        <i class="fa fa-times" style = "color:red;font-size:19px;margin-right:10px" onclick = "deleteMessage({{$message->id}})"></i>
    </td>
</tr>