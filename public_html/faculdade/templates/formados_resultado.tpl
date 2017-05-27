<hr class="margem-t margem-b" />
{?if $foto?}
    <img src="/{?$foto?}" />
{?/if?}
{?if $formados?}
{?foreach from=$formados item=formado?}
<p>{?$formado?}</p>
{?/foreach?}
{?else?}
    <div>Nenhum aluno encontrado</div>
{?/if?}