<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                <?php 
                foreach($data['posts'] as $item): ?>
                <li class="list-group-item">
                    <a href="<?='#'.$item->id?>" data-toggle="list">
                        <?=$item->title?>
                    </a>
                </li>
                <?php 
                    endforeach;
                ?>
            </ul>
        </div>
        <div class="col-sm-8">
            <div class="tab-content" id="nav-tabContent">
                <?php 
                foreach($data['posts'] as $item): ?>
                <div class="tab-pane fade" id="<?=$item->id?>" role="tabpanel">
                    <?=$item->content?>
                </div>
                <?php 
                    endforeach;
                ?>
            </div>
        </div>
    </div>
    
</div>