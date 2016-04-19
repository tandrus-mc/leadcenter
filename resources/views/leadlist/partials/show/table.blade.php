<div class="widget">
    <div class="widget-header">
        <h3>List Preview</h3>
    </div>
    <div class="widget-content">
        <table id="list_table" class="table datatable" cellspacing="0" width="100%" style="white-space: nowrap">
            <thead>
            @include('leadlist.partials.show.table-head')
            </thead>
            <tbody>
            @foreach($results as $index => $row)
                @include('leadlist.partials.show.table-row')
            @endforeach
            </tbody>
        </table>
    </div>
</div>