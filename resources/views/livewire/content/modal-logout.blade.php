<div class="modal fade" id="showModalLogout" aria-labelledby="showModalLogout" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-toggle-wrapper">
              <ul class="modal-img">
                <li> <img src="/assets/images/gif/logout.gif" alt="logout"></li>
              </ul>
              <h4 class="pt-3 text-center">Bạn muốn rời đi??</h4>
              <p class="text-center">Bạn có chắc chắn muốn đăng xuất khỏi bảng điều khiển này không?</p>
              <button class="btn btn-dark d-flex m-auto" type="button" data-bs-dismiss="modal" wire:click="logout">Đúng, Đăng xuất</button>
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
