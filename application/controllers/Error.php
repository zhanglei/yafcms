<?php

/**
 * 当有未捕获的异常, 则控制流会流到这里
 */
class ErrorController extends \Yaf\Controller_Abstract {

    /**
     * 此时可通过$request->getException()获取到发生的异常
     */
    public function errorAction() { 
        $exception = $this->getRequest()->getException();
        try {
            throw $exception;
        } catch (Yaf\Exception\LoadFailed $e) {
            //加载失败
        } catch (Yaf\Exception $e) {
            //其他错误
        }
        
//        assert($exception === $exception->getCode());
//        $this->getView()->assign("code", $exception->getCode());
//        $this->getView()->assign("message", $exception->getMessage());
      
    }

}
