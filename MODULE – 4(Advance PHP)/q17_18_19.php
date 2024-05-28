<!-- 

• Create Hotel Room Booking System User can book room by 3 ways
Full day
Half day
Custom

• If user select for the full day than user only have selection for the checking checkout
date

• If user select Half day than user have option of date and slot option(like user want to
book room for first half – Morning (8AM to 6PM) if user select for second halfit‟s
for evening (7PM to Morning 7AM)). Do proper validation like if user can book only
available slot. (have touse jQuery -> Ajax, validation, Json passing)
 -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hotel Room Booking System</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<h1>Hotel Room Booking System</h1>

<form id="bookingForm">
    <label for="bookingType">Booking Type:</label>
    <select id="bookingType">
        <option value="fullDay">Full Day</option>
        <option value="halfDay">Half Day</option>
        <option value="custom">Custom</option>
    </select>

    <div id="datePickerDiv">
        <label for="checkinDate">Check-in Date:</label>
        <input type="date" id="checkinDate">
    </div>

    <div id="checkoutDateDiv" style="display: none;">
        <label for="checkoutDate">Check-out Date:</label>
        <input type="date" id="checkoutDate">
    </div>

    <div id="slotPickerDiv" style="display: none;">
        <label for="bookingSlot">Slot:</label>
        <select id="bookingSlot">
            <option value="morning">Morning (8AM to 6PM)</option>
            <option value="evening">Evening (7PM to Morning 7AM)</option>
        </select>
    </div>

    <button type="submit">Book Room</button>
</form>

<script>
$(document).ready(function(){
    $('#bookingType').change(function(){
        var selectedOption = $(this).val();
        if(selectedOption === 'fullDay') {
            $('#checkoutDateDiv').show();
            $('#slotPickerDiv').hide();
        } else if(selectedOption === 'halfDay') {
            $('#checkoutDateDiv').hide();
            $('#slotPickerDiv').show();
        } else if(selectedOption === 'custom') {
            $('#checkoutDateDiv').show();
            $('#slotPickerDiv').show();
        }
    });

    $('#bookingForm').submit(function(event){
        event.preventDefault();
        var bookingType = $('#bookingType').val();
        var checkinDate = $('#checkinDate').val();
        var checkoutDate = $('#checkoutDate').val();
        var bookingSlot = $('#bookingSlot').val();

        if (bookingType === 'fullDay' && checkoutDate === '') {
            alert('Please select check-out date for full day booking.');
            return;
        } else if ((bookingType === 'halfDay' || bookingType === 'custom') && checkinDate === '') {
            alert('Please select check-in date.');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'process_booking.php', 
            data: {
                type: bookingType,
                checkinDate: checkinDate,
                checkoutDate: checkoutDate,
                slot: bookingSlot
            },
            success: function(response) {
                alert(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>

</body>
</html>
