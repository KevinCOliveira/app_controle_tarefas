<tr>
<td class="header">
<a href={{$url}} style="display: inline-block;">
@if (trim($slot) === "Controle de tarefas")
<img src="https://cdn-icons-png.flaticon.com/512/1975/1975300.png" class="logo" alt="Controle de tarefas Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
