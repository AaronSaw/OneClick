@extends('layouts.admin_common')
@section('content')
    <div class="card-collect">
        <a href="{{ route('product.index') }}">
            <div class="mini-card">
                <p class="count-no"> {{ $countProduct }}</p>
                <span class="count-name"> Product</span>
            </div>
        </a>
        <a href="{{ route('user.userlist') }}">
            <div class="mini-card">
                <p class="count-no">{{ $countUser }}</p>
                <span class="count-name">User</span>
            </div>
        </a>
        <a href="{{ url('orderlist') }}">
            <div class="mini-card">
                <p class="count-no">{{ $countOrder }}</p>
                <span class="count-name">Order</span>
            </div>
        </a>
        <a href="{{ url('category') }}">
            <div class="mini-card">
                <p class="count-no">{{ $countCategory }}</p>
                <span class="count-name">Category</span>
            </div>
        </a>
    </div>
    <h2 class="dashboard-title">Orders Count By Categories</h2>
    <div class="chart-card">
        <canvas id="op"></canvas>
    </div>
@endsection
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.count-no').counterUp({
                delay: 5,
                time: 500
            });
        });
        let catArr = {!! json_encode($catName) !!};
        let CountPostArr = {!! json_encode($countOrderByCategory) !!};
        let op = document.getElementById('op').getContext('2d');
        let opChart = new Chart(op, {
            type: 'bar',
            data: {
                labels: catArr,
                datasets: [{
                    barPercentage: 0.5,
                    barThickness: 100,
                    maxBarThickness: 80,
                    minBarLength: 0,
                    label: 'Orders  Vs Categories',
                    data: CountPostArr,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        display: true,
                        beginAtZero: true,
                        ticks: {
                            color: 'black',
                            font: {
                                size: 15,
                            }
                        }
                    },
                    x: {
                        display: true,
                        ticks: {
                            color: '#000',
                            font: {
                                size: 20,
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        shape: "circle",
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            backgroundColor: 'rgba(255, 159, 64, 1)',
                            color: '#000',
                            font: {
                                size: 15,
                            },
                        }
                    }
                }
            }
        });
    </script>
@endpush
