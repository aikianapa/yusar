<style>
.modal-header {
  border: none;
  margin-top: 30px;
}

.modal-header .close {
  position: absolute;
  right: 15px;
  top: 15px;

  margin: 0;
  padding: 0;
}

.modal-title {
    margin: 0 auto;
}

.modal-content {
    border-radius: 10px;
    border: none;

    position: relative;
}

.modal-body {
    text-align: center;
    font-weight: 500;
}

.btn {
    margin: 0 auto;
    border-radius: 0;
    background-color: #2BA8DD;
    border-color: #2BA8DD;
    color: #fff;
    border-radius: 7px;
}

.btn:hover {
    border-color: #2286B0;
    background-color: #2286B0;
}

.modal-footer {
  border: none;
  margin-bottom: 30px;
}
</style>

<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackModalTitle">
            <img src="/tpl/assets/img/access.svg" height="80" width="80" alt="">
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Спасибо! Скоро с Вами свяжутся наши специалисты.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>