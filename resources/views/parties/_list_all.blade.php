<?php $count = 1; ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th class="hidden-xs">
                Party Name
            </th>
            <th>
                Short Name
            </th>

            <th>
                Address
            </th>
            <th>
                Contact Person
            </th>
            <th>Phone</th>
            <th>Party Type</th>
            <th>Party Group</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $k => $v)
        <tr>
            <td> {{ (($results->currentPage() - 1 ) * $results->perPage() ) + $count + $k }} </td>
            <td class="hidden-xs"> {{ $v->name }} </td>
            <td> {{ $v->short_name }} </td>
            <td> {{ $v->address }} </td>
            <td> {{ $v->contact_person }} </td>
            <td> {{ $v->phone }} </td>

            <td> {{ $v->party_type['name'] }} </td>
            <td> {{ $v->party_group['name'] }} </td>
            <td>
                <a href=" {{ route('party.view', Crypt::encrypt($v->id)) }}">
                    <span class="label label-success">Details</span>
                </a>

                <a href=" {{ route('party.edit', Crypt::encrypt($v->id)) }}">
                    <span class="label label-info">Edit</span>
                </a>

                <a  style="color:red" onclick="return confirm('Are you sure you want to delete this item?');" href=" {{ route('party.disable', Crypt::encrypt($v->id)) }}">
                    <span class="label label-danger">Delete</span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination">
{!! $results->render() !!}
</div>