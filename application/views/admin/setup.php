
<div class="card">
  <div class="card-header thmBg t-white">
    <i class="<?= $icon ?>"></i> <?= $title ?>
  </div>
  <div class="card-body">

    <ul class="nav nav-tabs" id="profileTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="bab-tab" data-toggle="tab" href="#bab" role="tab" aria-controls="bab" aria-selected="false">Barch and Building</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="db-tab" data-toggle="tab" href="#db" role="tab" aria-controls="db" aria-selected="false">Database</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        profile to
      </div>
      <div class="tab-pane fade" id="bab" role="tabpanel" aria-labelledby="bab-tab">
        branch and building to
      </div>
      <div class="tab-pane fade" id="db" role="tabpanel" aria-labelledby="db-tab">
        database to
      </div>
    </div>

  </div>
</div>
