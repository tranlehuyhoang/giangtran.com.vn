<div class="modal fade" id="showModalLogout" aria-labelledby="showModalLogout" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-toggle-wrapper">
            <ul class="modal-img">
              <li> <img src="/assets/images/gif/logout.gif" alt="logout"></li>
            </ul>
            <h4 class="pt-3 text-center">Already leaving??</h4>
            <p class="text-center">Are you sure want to logout this dashboard?</p><span class="d-block text-center mb-4"> Not a member?<a class="ms-1" href="sign-up.html">Register</a></span>
            <button class="btn btn-dark d-flex m-auto" type="button" data-bs-dismiss="modal" wire:click="logout">Yes, Log out</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        window.addEventListener('showModalLogout', (e) => {
            $("#showModalLogout").modal('show');
        });
    </script>

  </div>
