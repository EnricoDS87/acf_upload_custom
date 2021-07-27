// ACF hook, set to field key of your file upload field
add_filter('acf/upload_prefilter/key=file_download', 'gist_acf_upload_dir_prefilter');

// Custom upload directory
function gist_acf_upload_dir($param) {
    
    // Set to whatever directory you want the ACF file field to upload to
    $custom_dir = '/uploads/custom_dir';
    $param['path'] = WP_CONTENT_DIR . $custom_dir;
    $param['url'] = WP_CONTENT_URL . $custom_dir;

    return $param;
}
