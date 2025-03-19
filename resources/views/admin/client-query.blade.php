@extends('admin/layout/frame')
@section('section')

<div class="main_section_style">
    <div class="heading_nav_bar"></div>

    <h1 class="text_align_center mb_3">
        Client Query
    </h1>
    <div class="table_data_styling">
        <table>
            <tr>
                <th>Mark</th>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Web Url</th>
                <th>Preffered Option</th>
                <th>Budget</th>
                <th>Goals</th>
                <th>FB Link</th>
                <th>Insta Link</th>
                <th>Service</th>
                <th>Requirement</th>
                <th>Existing Tool</th>
                <th>Form Type</th>
                <th>Language</th>
                <th>Created At</th>
                <th>Remarks</th>
            </tr>

            @foreach($QueryForms as $query)
            <tr>
                <!-- ✅ Checkbox Form (Mark Query) -->
                <td class="text_align_center">
                    <input type="checkbox" class="mark-checkbox" data-id="{{ $query->id }}">
                </td>

                <td class="text_align_center">{{ $loop->iteration }}</td>
                <td>{{ $query->name }}</td>
                <td>{{ $query->email }}</td>
                <td>{{ $query->company_name }}</td>
                <td>{{ $query->phone_number }}</td>
                <td>{{ $query->your_msg }}</td>
                <td>{{ $query->web_url }}</td>
                <td>{{ $query->preffered_option }}</td>
                <td>{{ $query->budget }}</td>
                <td>{{ $query->goals }}</td>
                <td>{{ $query->fb_link }}</td>
                <td>{{ $query->insta_link }}</td>
                <td>{{ $query->category }}</td>
                <td>{{ $query->Requirement }}</td>
                <td>{{ $query->existing_tool }}</td>
                <td>{{ $query->form_type }}</td>
                <td>{{ $query->language }}</td>
                <td>{{ date('M d, Y', strtotime($query->created_at)) }}</td>

                <!-- ✅ Remarks Form (Focus Out Auto Save) -->
                <td>
                    <textarea class="remarks-textarea" data-id="{{ $query->id }}" rows="3" cols="50">{{ $query->remarks }}</textarea>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<!-- ✅ jQuery AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // ✅ 1. Checkbox Submission (Mark Query)
        $(".mark-checkbox").on("change", function () {
            let id = $(this).data("id");
            let status = $(this).is(":checked") ? 1 : 0;

            $.ajax({
                url: "{{ route('mark.query') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    status: status
                },
                success: function (response) {
                    console.log(response.message);
                }
            });
        });

        // ✅ 2. Remarks Submission (Focus Out Event)
        $(".remarks-textarea").on("blur", function () {
            let id = $(this).data("id");
            let remarks = $(this).val();

            $.ajax({
                url: "{{ route('submit.remarks') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    remarks: remarks
                },
                success: function (response) {
                    console.log(response.message);
                }
            });
        });
    });
</script>

@endsection
