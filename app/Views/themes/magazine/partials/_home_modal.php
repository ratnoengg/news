<div class="modal fade" id="eBookModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
				<a href="https://digibanglatech.news/%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC-%E0%A6%9F%E0%A7%87%E0%A6%B2%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97%E0%A6%BE%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%93-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF-%E0%A6%B8%E0%A6%82%E0%A6%98-%E0%A6%A6%E0%A6%BF%E0%A6%AC%E0%A6%B8-%E0%A7%A8%E0%A7%A6%E0%A7%A8%E0%A7%AB-%E0%A7%A7%E0%A7%AD-%E0%A6%AE%E0%A7%87-%E0%A7%A8%E0%A7%A6%E0%A7%A8%E0%A7%AB">
            	<img src="https://digibanglatech.news/uploads/images/202505/image_870x_6827ff2fb01d7.jpg" class="img-fluid" alt="Responsive image"></a>
                
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function () {
// Check if user saw the modal
var key = 'hadModal';
var hadModal = localStorage.getItem(key);

// Show the modal only if new user
if (!hadModal) {
    $('#eBookModal').modal('show');
}

//setInterval(displayHello, 1000000);

function displayHello() {
  $('#eBookModal').modal('show');
}

// If modal is displayed, store that in localStorage
$('#eBookModal').on('shown.bs.modal', function () {
    localStorage.setItem(key, true);
})  



})

</script>

