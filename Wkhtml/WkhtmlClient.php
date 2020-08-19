<?php

namespace Wkhtml;

class WkhtmlClient
{
    private $tmp_file_path;
    private $template_type;
    private $log_path;

    //模板类型
    const TEMPLATE_TYPE_OF_PHP = 'php';

    /**
     * WkhtmlClient constructor.
     * @param $tmp_file_path 临时文件目录
     * @param string $template_type 模板类型
     * @param string $log_path 日志目录
     */
    public function __construct($tmp_file_path, $template_type = self::TEMPLATE_TYPE_OF_PHP, $log_path = '') {
        $this->template_type = $template_type;
        $this->tmp_file_path = $tmp_file_path;
        $this->log_path      = $log_path;
    }


    /**
     * 模板动态生成pdf
     * @param $template_file
     * @param $template_params
     * @param string $template_type
     * @param string $log_file
     * @return string
     * @throws \Exception
     */
    public function wkhtmltopdf($template_file, $template_params) {
        if (empty($this->tmp_file_path)) {
            throw new \Exception("tmp_file_path is null.");
        }
        $template_file_path = __DIR__ . "/../templates/{$this->template_type}/$template_file";
        if (!is_file($template_file_path)) {
            throw new \Exception("template[{$template_file_path}] not Exists.");
        }
        if (!empty($this->log_path) && !is_dir($this->log_path)) {
            mkdir($this->log_path, 0777, true);
        }
        $content = '';
        switch ($this->template_type) {
            case self::TEMPLATE_TYPE_OF_PHP:
                $content = $this->renderPhpTemplate($template_file_path, ['data' => $template_params]);
        }
        if (empty($content)) {
            return '';
        }
        $file_name     = uniqid('wkhtmltopdf');
        $tmp_html_file = $this->tmp_file_path . "/{$file_name}.html";
        $tmp_pdf_file  = $this->tmp_file_path . "/{$file_name}.pdf";
        file_put_contents($tmp_html_file, $content);
        if (empty($this->log_path)) {
            $cmd = "wkhtmltopdf -q {$tmp_html_file} {$tmp_pdf_file}";
        } else {
            $log_file = $this->log_path . '/wkhtmltopdf.log';
            $cmd      = "wkhtmltopdf {$tmp_html_file} {$tmp_pdf_file}  >>{$log_file} 2>&1";
        }
        shell_exec($cmd);
        unlink($tmp_html_file);
        return $tmp_pdf_file;
    }


    /**
     * 渲染PHP模版
     *
     * @param       $template_file
     * @param array $template_params
     *
     * @return string
     */
    protected function renderPhpTemplate($template_file, $template_params = []) {
        ob_start();
        ob_implicit_flush(false);
        extract($template_params, EXTR_OVERWRITE);
        require($template_file);
        return ob_get_clean();
    }

}