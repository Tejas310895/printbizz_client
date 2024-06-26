<div class="page">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Overview
                        </div>
                        <h2 class="page-title">
                            Orders History
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="row row-cards" id="product_bucket">
                            <?php foreach ($orders as $order) : ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border border-0" style="border-radius: 20px;">
                                        <div class="card-header card-header-light pe-0" style="border-radius: 20px;">
                                            <div class="row align-items-center w-100">
                                                <div class="col-auto">
                                                    <a href="#">
                                                        <span class="avatar" title="Tejas Shirsat">TS</span>
                                                    </a>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" id="order_id_title" class="text-reset d-block">Order # <?= $order['order_no'] ?></a>
                                                    <div class="d-block text-secondary text-truncate mt-n1"><?= date('d M Y H:i A', strtotime($order['created_at'])) ?></div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="btn btn-ghost-danger w-100 btn-icon rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M4 7h16" />
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                            <path d="M10 12l4 4m0 -4l-4 4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="divide-y">
                                                <?php foreach ($order['products'] as $product) : ?>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="text-truncate">
                                                                    <strong><?= $product['name'] ?></strong>
                                                                </div>
                                                                <?php foreach ($product['groups'] as $group) : ?>
                                                                    <?php foreach ($group['items'] as $item) : ?>
                                                                        <div class="mb-2">
                                                                            <div class="badge bg-primary"></div>
                                                                            <?= $group['name'] ?> : <strong><?= $item['name'] ?></strong>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                <?php endforeach; ?>
                                                                <div class="col-auto">
                                                                    <a href="#" class="link-indigo">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                            <path d="M9 9l1 0" />
                                                                            <path d="M9 13l6 0" />
                                                                            <path d="M9 17l6 0" />
                                                                        </svg>
                                                                        <?= $product['pages'] ?> <small>Pages</small> X <?= $product['copies'] ?> Copies
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto align-self-center">
                                                                <div class="col-auto text-secondary">
                                                                    <button class="switch-icon switch-icon-scale active" onclick='opencanvas(<?= json_encode($product["files"]) ?>)'>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                                                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                                                            <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
    <div class="offcanvas-header border border-bottom-0">
        <h2 class="offcanvas-title" id="offcanvasStartLabel">Order # PRB17143094550</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row row-cards files_bucket">

        </div>
    </div>
</div>
<script>
    function PrintElem(elem) {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');
        mywindow.document.write('<img src="' + document.getElementById(elem).src + '" width="95%">');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
    }

    function opencanvas(files) {
        $.each(files, function(fi, fv) {
            $('.files_bucket').empty();
            template = '<div class="col-lg-4">';
            template += '<div class="card files_bucket">';
            template += '<div class="empty p-1" style="height: 400px;">';
            template += '<embed src="https://admin.printbizz.in/writable/' + fv + '" id="new1" onclick="PrintElem(this.id)" style="width: 100%;height:100%;">';
            template += '</div>';
            template += '</div>';
            template += '</div>';
            $('.files_bucket').append(template);
        });
        var myOffcanvas = document.getElementById('offcanvasStart')
        var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas)
        bsOffcanvas.show()
    }

    function search_product(element) {
        var search_text = element.val();
        if (search_text.length > 1) {
            $('div#product_bucket').find('.col-md-6').each(function() {
                if ($(this).find('#order_id_title').text().toUpperCase().indexOf(search_text.toUpperCase()) != -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            })
        } else {
            $('div#product_bucket').find('.col-md-6').each(function() {
                $(this).show();
            })
        }
    }
</script>