<div class="modal fade" id="modalPopup" tabindex="-1" role="dialog" aria-labelledby="modalPopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPopupLabel">Input Data Patient</h5>
            </div>
            <form>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tbody>
                            <h5>Information Patient</h5>
                            <tr>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="name1" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Name</label>
                                        <input type="text" id="name1" name="name1" class="form-control w-100" placeholder="Type Here" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Gender</label>
                                        <select id="gender" class="form-control" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                            <option value="" selected>Choose Here</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="age" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Age</label>
                                        <input type="text" id="age" name="age" class="form-control w-100" placeholder="Type Here" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Phone Number</label>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control w-100" placeholder="Type Here" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="date" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Date</label>
                                        <input type="date" id="date" class="form-control w-100" name="date">
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="desease" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Desease</label>
                                        <select id="desease" class="form-control" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                            <option value="" selected>Choose Here</option>
                                            <option value="isi1">isi1</option>
                                            <option value="isi2">isi2</option>
                                        </select>
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="medicine" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Medicine</label>
                                        <input type="text" id="medicine" name="medicine" class="form-control w-100" placeholder="Type Here" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="dose" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Dose</label>
                                        <input type="text" id="dose" name="dose" class="form-control w-100" placeholder="Type Here" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <!-- <label for="howmanytime" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">How Many Time</label>
                                        <select id="howmanytime" class="form-control" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                            <option value="" selected>Choose Here</option>
                                            <option value="">every day</option>
                                            <option value="female">1 day</option>
                                            <option value="female">1 week</option>
                                            <option value="female">1 month</option>
                                        </select> -->
                                    <div class="mb-3">
                                        <label for="howmanytime" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">How Many Time</label>
                                        <input type="number" id="howmanytime" name="howmanytime" class="form-control w-100" placeholder="Type Here" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                                    </div>
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="howmanytimeaday" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">How Many Time A Day</label>
                                        <select id="howmanytimeaday" class="form-control" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                            <option value="" selected>Choose Here</option>
                                            <option value="1">1 Day</option>
                                            <option value="2">2 Day</option>
                                            <option value="3">3 Day</option>
                                        </select>
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="when" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">When</label>
                                        <div id="time-inputs"></div>
                                    </div>
                                </th>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="timeperiode" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Time Periode</label>
                                        <div class="input-group">
                                            <input type="date" id="startDate" class="form-control w-50" name="startDate" placeholder="Start Date">
                                            <span class="input-group-text">-</span>
                                            <input type="date" id="endDate" class="form-control w-50" name="endDate" placeholder="End Date">
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="DeseaseSerious" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">serious the disease is</label>
                                        <div class="DeseaseSerious btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-danger">Critical</button>
                                            <button type="button" class="btn btn-warning">Medium</button>
                                            <button type="button" class="btn btn-success">Low</button>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="4" scope="col" class="col-3">
                                    <div class="mb-3">
                                        <label for="note" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Noted</label>
                                        <textarea id="note" class="form-control" name="note" rows="2" col="1000" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;" placeholder="Type Here"></textarea>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
    $('#howmanytimeaday').on('change', function() {
        var selectedValue = $(this).val();
        var timeInputs = '';
        for (var i = 0; i < selectedValue; i++) {
            timeInputs += '<input type="time" class="form-control w-100 mt-2" name="when[]">';
        }
        $('#time-inputs').html(timeInputs);
    });
});
</script>


<script>
    // JavaScript
window.onload = function() {
    $('#modalPopup').modal('show');
}

// atau dengan jQuery
$(document).ready(function() {
    $('#modalPopup').modal('show');
});
</script>

























<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel fade" id="panel-detail">
                        <div class="panel-dialog">
                            <div class="panel-header">
                                <button type="button"class="close" datadismiss="panel" arial-label="Close">
                                    <span aria-hidden="true"></span>
                                </button>
                                <h4 class="panel-tittle">Information Patient</h4>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered no-margin">
                                    <tbody>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->