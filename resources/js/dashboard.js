/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'cropperjs/dist/cropper.css';
import Cropper from 'cropperjs';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


window.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar');
    var image = document.getElementById('image');
    var input = document.getElementById('input');
    var $progress = $('.progress');
    var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal');
    var cropperUpload;
    var initialAvatarURL;
    var canvas;

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
            input.value = '';
            image.src = url;
            $alert.hide();
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropperUpload = new Cropper(image, {
            aspectRatio: 8/7,
            viewMode: 3,
            autoCropArea: 1,
        });
    }).on('hidden.bs.modal', function () {
        cropperUpload.destroy();
        cropperUpload = null;
    });
    
    document.getElementById('crop').addEventListener('click', function () {
        $modal.modal('hide');
        if (cropperUpload) {
            canvas = cropperUpload.getCroppedCanvas({
                width: 400,
                height: 350,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
        }
    });

    $('#criar').on('click', function(e){
        e.preventDefault();
        $progress.show();
        canvas.toBlob(function (blob) {
            var formData = new FormData();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax(base_url + 'projeto/store', {
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function () {
                    var xhr = new XMLHttpRequest();
                    xhr.upload.onprogress = function (e) {
                        var percent = '0';
                        var percentage = '0%';
                        if (e.lengthComputable) {
                            percent = Math.round((e.loaded / e.total) * 100);
                            percentage = percent + '%';
                            $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
                        }
                    };
                    return xhr;
                },
                complete: function () {
                    $progress.hide();
                },
            });
        });
    });
});