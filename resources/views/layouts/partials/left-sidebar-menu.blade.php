<li class="menu-title">
    <span class="text">Lists</span>
    <i class="fa fa-list title pull-right"></i>
</li>
<li>
    <a href="{{ action('LeadListController@index') }}">
        <span class="text">Overview</span>
    </a>
</li>
<li>
    <a href="{{ action('LeadListController@create') }}">
        <span class="text">Create</span>
    </a>
</li>
<li>
    <a href="{{ action('LeadListController@edit_index') }}">
        <span class="text">Edit</span>
    </a>
</li>
<li class="menu-title">
    <span class="text">Leads</span>
    <i class="fa fa-envelope-o title pull-right"></i>
</li>
<li>
    <a href="{{ action('LeadController@index') }}">
        <span class="text">Overview</span>
    </a>
</li>
<li>
    <a href="{{ action('LeadController@create') }}">
        <span class="text">Create</span>
    </a>
</li>
<li>
    <a href="{{ action('LeadController@edit_index') }}">
        <span class="text">Edit</span>
    </a>
</li>
