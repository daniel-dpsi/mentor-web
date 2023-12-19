@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://cdn.discordapp.com/attachments/923643835073060886/1109214672764289185/estoritve.jpg" class="logo" alt="e-Storitve">-
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
