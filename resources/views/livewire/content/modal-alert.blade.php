<div>
    <div class="modal fade" id="showModalAlert" tabindex="-1"
        aria-labelledby="showModalAlert" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img src="/assets/images/gif/danger.gif" alt="error"></li>
                        </ul>
                        <h4 class="text-center pb-2" id="titless">  </h4>
                        <p class="text-center" id="messagess"> </p>
                        <button class="btn btn-secondary d-flex m-auto" type="button"
                            data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('showModalAlert', (e) => {
                $("#showModalAlert").modal('show');
                document.getElementById('titless').textContent = e.detail[0].title;
                document.getElementById('messagess').textContent = e.detail[0].message;
            });
        </script>

    </div>

</div>
