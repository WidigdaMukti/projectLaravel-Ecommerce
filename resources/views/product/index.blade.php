@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Check Our Products</h2>
                    <span>Browse our Products !</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<div class="search-from" <form action="#">
    <input type="search" name="search" placeholder="Cari di Sneakers.Id">
    <button><ion-icon class="bi bi-search" name="search-outline"></ion-icon></button>
    </form>
</div>

<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Latest Products</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($viewData["products"] as $product)
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <div class="hover-content">
                            <div>
                                <ul>
                                    <li><a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn-primary">
                                            <ion-icon name="cart"></ion-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <img class="img" src="{{ asset('/storage/'.$product->getImage()) }}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>{{ $product->getName() }}</h4>
                        <span>{{ $product->getPrice() }}</span>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="pagination" class="pagination">
                    <ul class="pagination">
                        <li id="page1" class="page-item active">
                            <a>1</a>
                        </li>
                        <li id="page2" class="page-item">
                            <a>2</a>
                        </li>
                        <li id="page3" class="page-item">
                            <a>3</a>
                        </li>
                        <li id="nextPage" class="page-item">
                            <a id="nextPageLink">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            var currentPage = 1;
            var itemsPerPage = 6;
            var totalItems = <?php echo count($viewData["products"]); ?>;
            var totalPages = Math.ceil(totalItems / itemsPerPage);

            function showItems(startIndex, endIndex) {
                var items = document.querySelectorAll('.item');
                for (var i = 0; i < items.length; i++) {
                    if (i >= startIndex && i < endIndex) {
                        items[i].style.display = "block";
                    } else {
                        items[i].style.display = "none";
                    }
                }
            }

            function goToPage(page) {
                // Hapus kelas active dari elemen saat ini
                var currentPageItem = document.querySelector('#pagination li.page-item.active');
                currentPageItem.classList.remove('active');

                if (page === totalPages + 1) {
                    // Pergi ke halaman selanjutnya saat tanda ">" diklik
                    if (currentPage < totalPages) {
                        goToPage(currentPage + 1);
                    }
                } else {
                    // Tambahkan kelas active ke elemen halaman yang di-klik
                    var newPageItem = document.querySelector('#pagination li#page' + page);
                    newPageItem.classList.add('active');

                    // Hitung indeks awal dan akhir item yang akan ditampilkan
                    var startIndex = (page - 1) * itemsPerPage;
                    var endIndex = startIndex + itemsPerPage;

                    // Tampilkan item yang sesuai dengan halaman yang dipilih
                    showItems(startIndex, endIndex);

                    // Simpan nomor halaman saat ini
                    currentPage = page;
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                var pageItems = document.querySelectorAll('#pagination li.page-item');
                pageItems.forEach(function(item, index) {
                    item.addEventListener("click", function() {
                        if (index === totalPages) {
                            // Pergi ke halaman selanjutnya saat tanda ">" diklik
                            if (currentPage < totalPages) {
                                goToPage(currentPage + 1);
                            }
                        } else {
                            // Pergi ke halaman yang diklik
                            goToPage(index + 1);
                        }
                    });
                });

                var nextPageLink = document.getElementById('nextPageLink');
                nextPageLink.addEventListener("click", function() {
                    if (currentPage < totalPages) {
                        goToPage(currentPage + 1);
                    }
                });

                // Tampilkan item yang sesuai dengan halaman awal
                showItems(0, itemsPerPage);
            });
        </script>



</section>
<!-- ***** Products Area Ends ***** -->

@endsection