<!DOCTYPE html>
<html style="font-size: 39px;" class="hairlines">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>移动端详情页</title>
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <?php include './parts/head.php'; ?>

    <link href="./details-mobile_files/video-share.3132ce.css" rel="stylesheet">
    <style>
    :root {
        --balloon-border-radius: 2px;
        --balloon-color: rgba(16, 16, 16, 0.95);
        --balloon-text-color: #fff;
        --balloon-font-size: 12px;
        --balloon-move: 4px
    }

    button[aria-label][data-balloon-pos] {
        overflow: visible
    }

    [aria-label][data-balloon-pos] {
        position: relative;
        cursor: pointer
    }

    [aria-label][data-balloon-pos]:after {
        text-indent: 0;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif;
        font-weight: 400;
        font-style: normal;
        text-shadow: none;
        font-size: var(--balloon-font-size);
        background: var(--balloon-color);
        border-radius: 2px;
        color: var(--balloon-text-color);
        border-radius: var(--balloon-border-radius);
        content: attr(aria-label);
        padding: .5em 1em;
        white-space: nowrap
    }

    [aria-label][data-balloon-pos]:after,
    [aria-label][data-balloon-pos]:before {
        opacity: 0;
        pointer-events: none;
        transition: all .18s ease-out .18s;
        position: absolute;
        z-index: 10
    }

    [aria-label][data-balloon-pos]:before {
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-top: 5px solid var(--balloon-color);
        content: ""
    }

    [aria-label][data-balloon-pos]:hover:after,
    [aria-label][data-balloon-pos]:hover:before,
    [aria-label][data-balloon-pos]:not([data-balloon-nofocus]):focus:after,
    [aria-label][data-balloon-pos]:not([data-balloon-nofocus]):focus:before,
    [aria-label][data-balloon-pos][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-visible]:before {
        opacity: 1;
        pointer-events: none
    }

    [aria-label][data-balloon-pos].font-awesome:after {
        font-family: FontAwesome, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif
    }

    [aria-label][data-balloon-pos][data-balloon-break]:after {
        white-space: pre
    }

    [aria-label][data-balloon-pos][data-balloon-break][data-balloon-length]:after {
        white-space: pre-line;
        word-break: break-word
    }

    [aria-label][data-balloon-pos][data-balloon-blunt]:after,
    [aria-label][data-balloon-pos][data-balloon-blunt]:before {
        transition: none
    }

    [aria-label][data-balloon-pos][data-balloon-pos=down]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-pos=down]:hover:before,
    [aria-label][data-balloon-pos][data-balloon-pos=down][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=down][data-balloon-visible]:before,
    [aria-label][data-balloon-pos][data-balloon-pos=up]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-pos=up]:hover:before,
    [aria-label][data-balloon-pos][data-balloon-pos=up][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=up][data-balloon-visible]:before {
        transform: translate(-50%)
    }

    [aria-label][data-balloon-pos][data-balloon-pos*=-left]:after {
        left: 0
    }

    [aria-label][data-balloon-pos][data-balloon-pos*=-left]:before {
        left: 5px
    }

    [aria-label][data-balloon-pos][data-balloon-pos*=-right]:after {
        right: 0
    }

    [aria-label][data-balloon-pos][data-balloon-pos*=-right]:before {
        right: 5px
    }

    [aria-label][data-balloon-pos][data-balloon-po*=-left]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-po*=-left]:hover:before,
    [aria-label][data-balloon-pos][data-balloon-po*=-left][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-po*=-left][data-balloon-visible]:before,
    [aria-label][data-balloon-pos][data-balloon-pos*=-right]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-pos*=-right]:hover:before,
    [aria-label][data-balloon-pos][data-balloon-pos*=-right][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-pos*=-right][data-balloon-visible]:before {
        transform: translate(0)
    }

    [aria-label][data-balloon-pos][data-balloon-pos^=up]:after,
    [aria-label][data-balloon-pos][data-balloon-pos^=up]:before {
        bottom: 100%;
        transform-origin: top;
        transform: translateY(var(--balloon-move))
    }

    [aria-label][data-balloon-pos][data-balloon-pos^=up]:after {
        margin-bottom: 10px
    }

    [aria-label][data-balloon-pos][data-balloon-pos=up]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=up]:before {
        left: 50%;
        transform: translate(-50%, var(--balloon-move))
    }

    [aria-label][data-balloon-pos][data-balloon-pos^=down]:after,
    [aria-label][data-balloon-pos][data-balloon-pos^=down]:before {
        top: 100%;
        transform: translateY(calc(var(--balloon-move)*-1))
    }

    [aria-label][data-balloon-pos][data-balloon-pos^=down]:after {
        margin-top: 10px
    }

    [aria-label][data-balloon-pos][data-balloon-pos^=down]:before {
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-bottom: 5px solid var(--balloon-color)
    }

    [aria-label][data-balloon-pos][data-balloon-pos=down]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=down]:before {
        left: 50%;
        transform: translate(-50%, calc(var(--balloon-move)*-1))
    }

    [aria-label][data-balloon-pos][data-balloon-pos=left]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-pos=left]:hover:before,
    [aria-label][data-balloon-pos][data-balloon-pos=left][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=left][data-balloon-visible]:before,
    [aria-label][data-balloon-pos][data-balloon-pos=right]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-pos=right]:hover:before,
    [aria-label][data-balloon-pos][data-balloon-pos=right][data-balloon-visible]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=right][data-balloon-visible]:before {
        transform: translateY(-50%)
    }

    [aria-label][data-balloon-pos][data-balloon-pos=left]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=left]:before {
        right: 100%;
        top: 50%;
        transform: translate(var(--balloon-move), -50%)
    }

    [aria-label][data-balloon-pos][data-balloon-pos=left]:after {
        margin-right: 10px
    }

    [aria-label][data-balloon-pos][data-balloon-pos=left]:before {
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left: 5px solid var(--balloon-color)
    }

    [aria-label][data-balloon-pos][data-balloon-pos=right]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=right]:before {
        left: 100%;
        top: 50%;
        transform: translate(calc(var(--balloon-move)*-1), -50%)
    }

    [aria-label][data-balloon-pos][data-balloon-pos=right]:after {
        margin-left: 10px
    }

    [aria-label][data-balloon-pos][data-balloon-pos=right]:before {
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-right: 5px solid var(--balloon-color)
    }

    [aria-label][data-balloon-pos][data-balloon-length]:after {
        white-space: normal
    }

    [aria-label][data-balloon-pos][data-balloon-length=small]:after {
        width: 80px
    }

    [aria-label][data-balloon-pos][data-balloon-length=medium]:after {
        width: 150px
    }

    [aria-label][data-balloon-pos][data-balloon-length=large]:after {
        width: 260px
    }

    [aria-label][data-balloon-pos][data-balloon-length=xlarge]:after {
        width: 380px
    }

    @media screen and (max-width:768px) {
        [aria-label][data-balloon-pos][data-balloon-length=xlarge]:after {
            width: 90vw
        }
    }

    [aria-label][data-balloon-pos][data-balloon-length=fit]:after {
        width: 100%
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9iYWxsb29uLWNzcy9iYWxsb29uLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSxNQUFNLDJCQUEyQixDQUFDLG1DQUFtQyxDQUFDLHlCQUF5QixDQUFDLHdCQUF3QixDQUFDLGtCQUFrQixDQUFDLHFDQUFxQyxnQkFBZ0IsQ0FBQywrQkFBK0IsaUJBQWlCLENBQUMsY0FBYyxDQUFDLHFDQUFxQyxhQUFhLENBQUMsd0hBQXdILENBQUMsZUFBZSxDQUFDLGlCQUFpQixDQUFDLGdCQUFnQixDQUFDLGtDQUFrQyxDQUFDLCtCQUErQixDQUFDLGlCQUFpQixDQUFDLCtCQUErQixDQUFDLDBDQUEwQyxDQUFDLHdCQUF3QixDQUFDLGdCQUFnQixDQUFDLGtCQUFrQixDQUFDLDJFQUEyRSxTQUFTLENBQUMsbUJBQW1CLENBQUMsaUNBQWlDLENBQUMsaUJBQWlCLENBQUMsVUFBVSxDQUFDLHNDQUFzQyxPQUFPLENBQUMsUUFBUSxDQUFDLDRCQUE0QixDQUFDLHlDQUF5QyxDQUFDLFVBQVUsQ0FBQyw2VkFBNlYsU0FBUyxDQUFDLG1CQUFtQixDQUFDLGtEQUFrRCxvSUFBb0ksQ0FBQyx5REFBeUQsZUFBZSxDQUFDLDhFQUE4RSxvQkFBb0IsQ0FBQyxxQkFBcUIsQ0FBQyxtSEFBbUgsZUFBZSxDQUFDLDRrQkFBNGtCLHlCQUF5QixDQUFDLDhEQUE4RCxNQUFNLENBQUMsK0RBQStELFFBQVEsQ0FBQywrREFBK0QsT0FBTyxDQUFDLGdFQUFnRSxTQUFTLENBQUMsb21CQUFvbUIsc0JBQXNCLENBQUMsdUhBQXVILFdBQVcsQ0FBQyxvQkFBb0IsQ0FBQyx5Q0FBeUMsQ0FBQywyREFBMkQsa0JBQWtCLENBQUMscUhBQXFILFFBQVEsQ0FBQyw2Q0FBNkMsQ0FBQywySEFBMkgsUUFBUSxDQUFDLGtEQUFrRCxDQUFDLDZEQUE2RCxlQUFlLENBQUMsOERBQThELE9BQU8sQ0FBQyxRQUFRLENBQUMsNEJBQTRCLENBQUMsNENBQTRDLENBQUMseUhBQXlILFFBQVEsQ0FBQyxzREFBc0QsQ0FBQyx3bEJBQXdsQiwwQkFBMEIsQ0FBQyx5SEFBeUgsVUFBVSxDQUFDLE9BQU8sQ0FBQyw2Q0FBNkMsQ0FBQyw0REFBNEQsaUJBQWlCLENBQUMsNkRBQTZELE9BQU8sQ0FBQyxRQUFRLENBQUMsNEJBQTRCLENBQUMsMENBQTBDLENBQUMsMkhBQTJILFNBQVMsQ0FBQyxPQUFPLENBQUMsc0RBQXNELENBQUMsNkRBQTZELGdCQUFnQixDQUFDLDhEQUE4RCxPQUFPLENBQUMsUUFBUSxDQUFDLDRCQUE0QixDQUFDLDJDQUEyQyxDQUFDLDBEQUEwRCxrQkFBa0IsQ0FBQyxnRUFBZ0UsVUFBVSxDQUFDLGlFQUFpRSxXQUFXLENBQUMsZ0VBQWdFLFdBQVcsQ0FBQyxpRUFBaUUsV0FBVyxDQUFDLG9DQUFvQyxpRUFBaUUsVUFBVSxDQUFDLENBQUMsOERBQThELFVBQVUiLCJzb3VyY2VzQ29udGVudCI6WyI6cm9vdHstLWJhbGxvb24tYm9yZGVyLXJhZGl1czoycHg7LS1iYWxsb29uLWNvbG9yOnJnYmEoMTYsMTYsMTYsMC45NSk7LS1iYWxsb29uLXRleHQtY29sb3I6I2ZmZjstLWJhbGxvb24tZm9udC1zaXplOjEycHg7LS1iYWxsb29uLW1vdmU6NHB4fWJ1dHRvblthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXXtvdmVyZmxvdzp2aXNpYmxlfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXXtwb3NpdGlvbjpyZWxhdGl2ZTtjdXJzb3I6cG9pbnRlcn1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc106YWZ0ZXJ7dGV4dC1pbmRlbnQ6MDtmb250LWZhbWlseTotYXBwbGUtc3lzdGVtLEJsaW5rTWFjU3lzdGVtRm9udCxTZWdvZSBVSSxSb2JvdG8sT3h5Z2VuLFVidW50dSxDYW50YXJlbGwsT3BlbiBTYW5zLEhlbHZldGljYSBOZXVlLHNhbnMtc2VyaWY7Zm9udC13ZWlnaHQ6NDAwO2ZvbnQtc3R5bGU6bm9ybWFsO3RleHQtc2hhZG93Om5vbmU7Zm9udC1zaXplOnZhcigtLWJhbGxvb24tZm9udC1zaXplKTtiYWNrZ3JvdW5kOnZhcigtLWJhbGxvb24tY29sb3IpO2JvcmRlci1yYWRpdXM6MnB4O2NvbG9yOnZhcigtLWJhbGxvb24tdGV4dC1jb2xvcik7Ym9yZGVyLXJhZGl1czp2YXIoLS1iYWxsb29uLWJvcmRlci1yYWRpdXMpO2NvbnRlbnQ6YXR0cihhcmlhLWxhYmVsKTtwYWRkaW5nOi41ZW0gMWVtO3doaXRlLXNwYWNlOm5vd3JhcH1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc106YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdOmJlZm9yZXtvcGFjaXR5OjA7cG9pbnRlci1ldmVudHM6bm9uZTt0cmFuc2l0aW9uOmFsbCAuMThzIGVhc2Utb3V0IC4xOHM7cG9zaXRpb246YWJzb2x1dGU7ei1pbmRleDoxMH1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc106YmVmb3Jle3dpZHRoOjA7aGVpZ2h0OjA7Ym9yZGVyOjVweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItdG9wOjVweCBzb2xpZCB2YXIoLS1iYWxsb29uLWNvbG9yKTtjb250ZW50OlwiXCJ9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdOmhvdmVyOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXTpob3ZlcjpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdOm5vdChbZGF0YS1iYWxsb29uLW5vZm9jdXNdKTpmb2N1czphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc106bm90KFtkYXRhLWJhbGxvb24tbm9mb2N1c10pOmZvY3VzOmJlZm9yZSxbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXZpc2libGVdOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tdmlzaWJsZV06YmVmb3Jle29wYWNpdHk6MTtwb2ludGVyLWV2ZW50czpub25lfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXS5mb250LWF3ZXNvbWU6YWZ0ZXJ7Zm9udC1mYW1pbHk6Rm9udEF3ZXNvbWUsLWFwcGxlLXN5c3RlbSxCbGlua01hY1N5c3RlbUZvbnQsU2Vnb2UgVUksUm9ib3RvLE94eWdlbixVYnVudHUsQ2FudGFyZWxsLE9wZW4gU2FucyxIZWx2ZXRpY2EgTmV1ZSxzYW5zLXNlcmlmfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tYnJlYWtdOmFmdGVye3doaXRlLXNwYWNlOnByZX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLWJyZWFrXVtkYXRhLWJhbGxvb24tbGVuZ3RoXTphZnRlcnt3aGl0ZS1zcGFjZTpwcmUtbGluZTt3b3JkLWJyZWFrOmJyZWFrLXdvcmR9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1ibHVudF06YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1ibHVudF06YmVmb3Jle3RyYW5zaXRpb246bm9uZX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1kb3duXTpob3ZlcjphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1kb3duXTpob3ZlcjpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9ZG93bl1bZGF0YS1iYWxsb29uLXZpc2libGVdOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zPWRvd25dW2RhdGEtYmFsbG9vbi12aXNpYmxlXTpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9dXBdOmhvdmVyOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zPXVwXTpob3ZlcjpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9dXBdW2RhdGEtYmFsbG9vbi12aXNpYmxlXTphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz11cF1bZGF0YS1iYWxsb29uLXZpc2libGVdOmJlZm9yZXt0cmFuc2Zvcm06dHJhbnNsYXRlKC01MCUpfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zKj0tbGVmdF06YWZ0ZXJ7bGVmdDowfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zKj0tbGVmdF06YmVmb3Jle2xlZnQ6NXB4fVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zKj0tcmlnaHRdOmFmdGVye3JpZ2h0OjB9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3MqPS1yaWdodF06YmVmb3Jle3JpZ2h0OjVweH1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvKj0tbGVmdF06aG92ZXI6YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wbyo9LWxlZnRdOmhvdmVyOmJlZm9yZSxbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvKj0tbGVmdF1bZGF0YS1iYWxsb29uLXZpc2libGVdOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG8qPS1sZWZ0XVtkYXRhLWJhbGxvb24tdmlzaWJsZV06YmVmb3JlLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zKj0tcmlnaHRdOmhvdmVyOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zKj0tcmlnaHRdOmhvdmVyOmJlZm9yZSxbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcyo9LXJpZ2h0XVtkYXRhLWJhbGxvb24tdmlzaWJsZV06YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3MqPS1yaWdodF1bZGF0YS1iYWxsb29uLXZpc2libGVdOmJlZm9yZXt0cmFuc2Zvcm06dHJhbnNsYXRlKDApfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zXj11cF06YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3NePXVwXTpiZWZvcmV7Ym90dG9tOjEwMCU7dHJhbnNmb3JtLW9yaWdpbjp0b3A7dHJhbnNmb3JtOnRyYW5zbGF0ZVkodmFyKC0tYmFsbG9vbi1tb3ZlKSl9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3NePXVwXTphZnRlcnttYXJnaW4tYm90dG9tOjEwcHh9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9dXBdOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zPXVwXTpiZWZvcmV7bGVmdDo1MCU7dHJhbnNmb3JtOnRyYW5zbGF0ZSgtNTAlLHZhcigtLWJhbGxvb24tbW92ZSkpfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zXj1kb3duXTphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvc149ZG93bl06YmVmb3Jle3RvcDoxMDAlO3RyYW5zZm9ybTp0cmFuc2xhdGVZKGNhbGModmFyKC0tYmFsbG9vbi1tb3ZlKSotMSkpfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zXj1kb3duXTphZnRlcnttYXJnaW4tdG9wOjEwcHh9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3NePWRvd25dOmJlZm9yZXt3aWR0aDowO2hlaWdodDowO2JvcmRlcjo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWJvdHRvbTo1cHggc29saWQgdmFyKC0tYmFsbG9vbi1jb2xvcil9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9ZG93bl06YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9ZG93bl06YmVmb3Jle2xlZnQ6NTAlO3RyYW5zZm9ybTp0cmFuc2xhdGUoLTUwJSxjYWxjKHZhcigtLWJhbGxvb24tbW92ZSkqLTEpKX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1sZWZ0XTpob3ZlcjphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1sZWZ0XTpob3ZlcjpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9bGVmdF1bZGF0YS1iYWxsb29uLXZpc2libGVdOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zPWxlZnRdW2RhdGEtYmFsbG9vbi12aXNpYmxlXTpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9cmlnaHRdOmhvdmVyOmFmdGVyLFthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tcG9zPXJpZ2h0XTpob3ZlcjpiZWZvcmUsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9cmlnaHRdW2RhdGEtYmFsbG9vbi12aXNpYmxlXTphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1yaWdodF1bZGF0YS1iYWxsb29uLXZpc2libGVdOmJlZm9yZXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTAlKX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1sZWZ0XTphZnRlcixbYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1sZWZ0XTpiZWZvcmV7cmlnaHQ6MTAwJTt0b3A6NTAlO3RyYW5zZm9ybTp0cmFuc2xhdGUodmFyKC0tYmFsbG9vbi1tb3ZlKSwtNTAlKX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1sZWZ0XTphZnRlcnttYXJnaW4tcmlnaHQ6MTBweH1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1sZWZ0XTpiZWZvcmV7d2lkdGg6MDtoZWlnaHQ6MDtib3JkZXI6NXB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1sZWZ0OjVweCBzb2xpZCB2YXIoLS1iYWxsb29uLWNvbG9yKX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLXBvcz1yaWdodF06YWZ0ZXIsW2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9cmlnaHRdOmJlZm9yZXtsZWZ0OjEwMCU7dG9wOjUwJTt0cmFuc2Zvcm06dHJhbnNsYXRlKGNhbGModmFyKC0tYmFsbG9vbi1tb3ZlKSotMSksLTUwJSl9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9cmlnaHRdOmFmdGVye21hcmdpbi1sZWZ0OjEwcHh9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1wb3M9cmlnaHRdOmJlZm9yZXt3aWR0aDowO2hlaWdodDowO2JvcmRlcjo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLXJpZ2h0OjVweCBzb2xpZCB2YXIoLS1iYWxsb29uLWNvbG9yKX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLWxlbmd0aF06YWZ0ZXJ7d2hpdGUtc3BhY2U6bm9ybWFsfVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tbGVuZ3RoPXNtYWxsXTphZnRlcnt3aWR0aDo4MHB4fVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tbGVuZ3RoPW1lZGl1bV06YWZ0ZXJ7d2lkdGg6MTUwcHh9W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1sZW5ndGg9bGFyZ2VdOmFmdGVye3dpZHRoOjI2MHB4fVthcmlhLWxhYmVsXVtkYXRhLWJhbGxvb24tcG9zXVtkYXRhLWJhbGxvb24tbGVuZ3RoPXhsYXJnZV06YWZ0ZXJ7d2lkdGg6MzgwcHh9QG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDo3NjhweCl7W2FyaWEtbGFiZWxdW2RhdGEtYmFsbG9vbi1wb3NdW2RhdGEtYmFsbG9vbi1sZW5ndGg9eGxhcmdlXTphZnRlcnt3aWR0aDo5MHZ3fX1bYXJpYS1sYWJlbF1bZGF0YS1iYWxsb29uLXBvc11bZGF0YS1iYWxsb29uLWxlbmd0aD1maXRdOmFmdGVye3dpZHRoOjEwMCV9Il0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    body,
    html {
        height: -webkit-fill-available;
        font-family: -apple-system, BlinkMacSystemFont, PingFang SC, Helvetica Neue, STHeiti, Microsoft Yahei, Tahoma, Simsun, sans-serif
    }

    @-webkit-keyframes my-face {
        2% {
            transform: translateY(1.5px) rotate(1.5deg)
        }

        4% {
            transform: translateY(-1.5px) rotate(-.5deg)
        }

        6% {
            transform: translateY(1.5px) rotate(-1.5deg)
        }

        8% {
            transform: translateY(-1.5px) rotate(-1.5deg)
        }

        10% {
            transform: translateY(2.5px) rotate(1.5deg)
        }

        12% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        14% {
            transform: translateY(-1.5px) rotate(1.5deg)
        }

        16% {
            transform: translateY(-.5px) rotate(-1.5deg)
        }

        18% {
            transform: translateY(.5px) rotate(-1.5deg)
        }

        20% {
            transform: translateY(-1.5px) rotate(2.5deg)
        }

        22% {
            transform: translateY(.5px) rotate(-1.5deg)
        }

        24% {
            transform: translateY(1.5px) rotate(1.5deg)
        }

        26% {
            transform: translateY(.5px) rotate(.5deg)
        }

        28% {
            transform: translateY(.5px) rotate(1.5deg)
        }

        30% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        32% {
            transform: translateY(1.5px) rotate(-.5deg)
        }

        34% {
            transform: translateY(1.5px) rotate(-.5deg)
        }

        36% {
            transform: translateY(-1.5px) rotate(2.5deg)
        }

        38% {
            transform: translateY(1.5px) rotate(-1.5deg)
        }

        40% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        42% {
            transform: translateY(2.5px) rotate(-1.5deg)
        }

        44% {
            transform: translateY(1.5px) rotate(.5deg)
        }

        46% {
            transform: translateY(-1.5px) rotate(2.5deg)
        }

        48% {
            transform: translateY(-.5px) rotate(.5deg)
        }

        50% {
            transform: translateY(.5px) rotate(.5deg)
        }

        52% {
            transform: translateY(2.5px) rotate(2.5deg)
        }

        54% {
            transform: translateY(-1.5px) rotate(1.5deg)
        }

        56% {
            transform: translateY(2.5px) rotate(2.5deg)
        }

        58% {
            transform: translateY(.5px) rotate(2.5deg)
        }

        60% {
            transform: translateY(2.5px) rotate(2.5deg)
        }

        62% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        64% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        66% {
            transform: translateY(1.5px) rotate(-.5deg)
        }

        68% {
            transform: translateY(-1.5px) rotate(-.5deg)
        }

        70% {
            transform: translateY(1.5px) rotate(.5deg)
        }

        72% {
            transform: translateY(2.5px) rotate(1.5deg)
        }

        74% {
            transform: translateY(-.5px) rotate(.5deg)
        }

        76% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        78% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        80% {
            transform: translateY(1.5px) rotate(1.5deg)
        }

        82% {
            transform: translateY(-.5px) rotate(.5deg)
        }

        84% {
            transform: translateY(1.5px) rotate(2.5deg)
        }

        86% {
            transform: translateY(-1.5px) rotate(-1.5deg)
        }

        88% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        90% {
            transform: translateY(2.5px) rotate(-.5deg)
        }

        92% {
            transform: translateY(.5px) rotate(-.5deg)
        }

        94% {
            transform: translateY(2.5px) rotate(.5deg)
        }

        96% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        98% {
            transform: translateY(-1.5px) rotate(-.5deg)
        }

        0%,
        to {
            transform: translate(0) rotate(0deg)
        }
    }

    @keyframes my-face {
        2% {
            transform: translateY(1.5px) rotate(1.5deg)
        }

        4% {
            transform: translateY(-1.5px) rotate(-.5deg)
        }

        6% {
            transform: translateY(1.5px) rotate(-1.5deg)
        }

        8% {
            transform: translateY(-1.5px) rotate(-1.5deg)
        }

        10% {
            transform: translateY(2.5px) rotate(1.5deg)
        }

        12% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        14% {
            transform: translateY(-1.5px) rotate(1.5deg)
        }

        16% {
            transform: translateY(-.5px) rotate(-1.5deg)
        }

        18% {
            transform: translateY(.5px) rotate(-1.5deg)
        }

        20% {
            transform: translateY(-1.5px) rotate(2.5deg)
        }

        22% {
            transform: translateY(.5px) rotate(-1.5deg)
        }

        24% {
            transform: translateY(1.5px) rotate(1.5deg)
        }

        26% {
            transform: translateY(.5px) rotate(.5deg)
        }

        28% {
            transform: translateY(.5px) rotate(1.5deg)
        }

        30% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        32% {
            transform: translateY(1.5px) rotate(-.5deg)
        }

        34% {
            transform: translateY(1.5px) rotate(-.5deg)
        }

        36% {
            transform: translateY(-1.5px) rotate(2.5deg)
        }

        38% {
            transform: translateY(1.5px) rotate(-1.5deg)
        }

        40% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        42% {
            transform: translateY(2.5px) rotate(-1.5deg)
        }

        44% {
            transform: translateY(1.5px) rotate(.5deg)
        }

        46% {
            transform: translateY(-1.5px) rotate(2.5deg)
        }

        48% {
            transform: translateY(-.5px) rotate(.5deg)
        }

        50% {
            transform: translateY(.5px) rotate(.5deg)
        }

        52% {
            transform: translateY(2.5px) rotate(2.5deg)
        }

        54% {
            transform: translateY(-1.5px) rotate(1.5deg)
        }

        56% {
            transform: translateY(2.5px) rotate(2.5deg)
        }

        58% {
            transform: translateY(.5px) rotate(2.5deg)
        }

        60% {
            transform: translateY(2.5px) rotate(2.5deg)
        }

        62% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        64% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        66% {
            transform: translateY(1.5px) rotate(-.5deg)
        }

        68% {
            transform: translateY(-1.5px) rotate(-.5deg)
        }

        70% {
            transform: translateY(1.5px) rotate(.5deg)
        }

        72% {
            transform: translateY(2.5px) rotate(1.5deg)
        }

        74% {
            transform: translateY(-.5px) rotate(.5deg)
        }

        76% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        78% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        80% {
            transform: translateY(1.5px) rotate(1.5deg)
        }

        82% {
            transform: translateY(-.5px) rotate(.5deg)
        }

        84% {
            transform: translateY(1.5px) rotate(2.5deg)
        }

        86% {
            transform: translateY(-1.5px) rotate(-1.5deg)
        }

        88% {
            transform: translateY(-.5px) rotate(2.5deg)
        }

        90% {
            transform: translateY(2.5px) rotate(-.5deg)
        }

        92% {
            transform: translateY(.5px) rotate(-.5deg)
        }

        94% {
            transform: translateY(2.5px) rotate(.5deg)
        }

        96% {
            transform: translateY(-.5px) rotate(1.5deg)
        }

        98% {
            transform: translateY(-1.5px) rotate(-.5deg)
        }

        0%,
        to {
            transform: translate(0) rotate(0deg)
        }
    }

    .hplayer {
        position: relative;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        line-height: 1
    }

    .hplayer * {
        box-sizing: content-box
    }

    .hplayer svg {
        width: 100%;
        height: 100%
    }

    .hplayer svg circle,
    .hplayer svg path {
        fill: #fff
    }

    .hplayer:-webkit-full-screen {
        width: 100%;
        height: 100%;
        background: #000;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        margin: 0;
        padding: 0;
        transform: translateZ(0)
    }

    .hplayer:-webkit-full-screen .hplayer-danmaku .hplayer-danmaku-bottom.hplayer-danmaku-move,
    .hplayer:-webkit-full-screen .hplayer-danmaku .hplayer-danmaku-top.hplayer-danmaku-move {
        -webkit-animation: danmaku-center 6s linear;
        animation: danmaku-center 6s linear;
        -webkit-animation-play-state: inherit;
        animation-play-state: inherit
    }

    .hplayer:-webkit-full-screen .hplayer-danmaku .hplayer-danmaku-right.hplayer-danmaku-move {
        -webkit-animation: danmaku 8s linear;
        animation: danmaku 8s linear;
        -webkit-animation-play-state: inherit;
        animation-play-state: inherit
    }

    .hplayer.hplayer-live .hplayer-bar-wrap,
    .hplayer.hplayer-live.hplayer-no-danmaku .hplayer-setting,
    .hplayer.hplayer-live .hplayer-setting-loop,
    .hplayer.hplayer-live .hplayer-setting-speed,
    .hplayer.hplayer-live .hplayer-time,
    .hplayer.hplayer-no-danmaku .hplayer-controller .hplayer-icons .hplayer-comment,
    .hplayer.hplayer-no-danmaku .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box .hplayer-setting-danmaku,
    .hplayer.hplayer-no-danmaku .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box .hplayer-setting-danunlimit,
    .hplayer.hplayer-no-danmaku .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box .hplayer-setting-showdan,
    .hplayer.hplayer-no-danmaku .hplayer-danmaku {
        display: none
    }

    .hplayer.hplayer-arrow .hplayer-danmaku {
        font-size: 18px
    }

    .hplayer.hplayer-arrow .hplayer-icon {
        margin: 0 -3px
    }

    .hplayer.hplayer-playing .hplayer-danmaku .hplayer-danmaku-move {
        -webkit-animation-play-state: running;
        animation-play-state: running
    }

    @media (min-width:900px) {

        .hplayer.hplayer-playing .hplayer-controller,
        .hplayer.hplayer-playing .hplayer-controller-mask {
            opacity: 0
        }

        .hplayer.hplayer-playing:hover .hplayer-controller,
        .hplayer.hplayer-playing:hover .hplayer-controller-mask {
            opacity: 1
        }
    }

    .hplayer.hplayer-loading .hplayer-bezel .diplayer-loading-icon {
        display: block
    }

    .hplayer.hplayer-loading .hplayer-danmaku,
    .hplayer.hplayer-loading .hplayer-danmaku-move,
    .hplayer.hplayer-paused .hplayer-danmaku,
    .hplayer.hplayer-paused .hplayer-danmaku-move {
        -webkit-animation-play-state: paused;
        animation-play-state: paused
    }

    .hplayer.hplayer-hide-controller {
        cursor: none
    }

    .hplayer.hplayer-hide-controller .hplayer-controller,
    .hplayer.hplayer-hide-controller .hplayer-controller-mask {
        opacity: 0;
        transform: translateY(100%)
    }

    .hplayer.hplayer-hide-controller .hplayer-speed {
        opacity: 0
    }

    .hplayer .hplayer-speed {
        background-color: transparent;
        height: 100%
    }

    .hplayer .hplayer-speed .hplayer-icon {
        position: absolute;
        right: 5px;
        top: 50%;
        padding: 5px;
        bottom: inherit;
        transform: translateY(-50%) translateZ(0);
        width: 32px;
        height: 32px;
        border: none;
        background-color: transparent;
        outline: none;
        cursor: pointer;
        vertical-align: middle;
        box-sizing: border-box;
        z-index: 2
    }

    .hplayer .hplayer-speed .hplayer-icon .hplayer-icon-content {
        transition: all .2s ease-in-out;
        opacity: .8
    }

    .hplayer .hplayer-speed .hplayer-speed-mask {
        background-image: linear-gradient(270deg, rgba(5, 5, 12, .95), rgba(5, 5, 12, .95) 15%, rgba(5, 5, 12, .8) 48%, rgba(5, 5, 12, .6) 66%, rgba(5, 5, 12, .35) 81%, rgba(5, 5, 12, .11) 93%, rgba(5, 5, 12, 0));
        height: 100%;
        width: 35%;
        position: absolute;
        right: -100%;
        top: 0;
        transition: all .2s;
        z-index: 10;
        transform: translateZ(0)
    }

    .hplayer .hplayer-speed .hplayer-speed-mask .hplayer-speed-list {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 100%
    }

    .hplayer .hplayer-speed .hplayer-speed-mask .hplayer-speed-item {
        font-size: 14px;
        color: #fff;
        letter-spacing: 0;
        line-height: 30px;
        font-weight: 600;
        text-align: center
    }

    .hplayer .hplayer-speed.hplayer-speed-mask-hide .hplayer-speed-mask {
        right: -100%
    }

    .hplayer .hplayer-speed.hplayer-speed-mask-show .hplayer-speed-mask {
        right: 0
    }

    .hplayer.hplayer-show-controller .hplayer-controller,
    .hplayer.hplayer-show-controller .hplayer-controller-mask {
        opacity: 1
    }

    .hplayer.hplayer-fulled {
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100vh;
        height: 100vw;
        transform: translate(100vw) rotate(90deg) translateZ(0);
        transform-origin: left top
    }

    .hplayer.hplayer-mobile .hplayer-controller .hplayer-icons .hplayer-full .hplayer-full-in-icon {
        position: static;
        display: inline-block
    }

    .hplayer.hplayer-mobile .hplayer-bar-time,
    .hplayer.hplayer-mobile.hplayer-hide-controller .hplayer-mobile-play {
        display: none
    }

    .hplayer.hplayer-mobile .hplayer-mobile-play {
        display: block
    }

    .hplayer-web-fullscreen-fix {
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 0
    }

    [data-balloon]:before {
        display: none
    }

    [data-balloon]:after {
        padding: .3em .7em;
        background: rgba(17, 17, 17, .7)
    }

    [data-balloon][data-balloon-pos=up]:after {
        margin-bottom: 0
    }

    .hplayer-bezel {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        font-size: 22px;
        color: #fff;
        pointer-events: none
    }

    .hplayer-bezel .hplayer-bezel-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -26px 0 0 -26px;
        height: 52px;
        width: 52px;
        padding: 12px;
        box-sizing: border-box;
        background: rgba(0, 0, 0, .5);
        border-radius: 50%;
        opacity: 0;
        pointer-events: none
    }

    .hplayer-bezel .hplayer-bezel-icon.hplayer-bezel-transition {
        -webkit-animation: bezel-hide .5s linear;
        animation: bezel-hide .5s linear
    }

    @-webkit-keyframes bezel-hide {
        0% {
            opacity: 1;
            transform: scale(1)
        }

        to {
            opacity: 0;
            transform: scale(2)
        }
    }

    @keyframes bezel-hide {
        0% {
            opacity: 1;
            transform: scale(1)
        }

        to {
            opacity: 0;
            transform: scale(2)
        }
    }

    .hplayer-bezel .hplayer-danloading {
        position: absolute;
        top: 50%;
        margin-top: -7px;
        width: 100%;
        text-align: center;
        font-size: 14px;
        line-height: 14px;
        -webkit-animation: my-face 5s ease-in-out infinite;
        animation: my-face 5s ease-in-out infinite
    }

    .hplayer-bezel .diplayer-loading-icon {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -18px 0 0 -18px;
        height: 36px;
        width: 36px;
        pointer-events: none
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-hide {
        display: none
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot {
        -webkit-animation: diplayer-loading-dot-fade .8s ease infinite;
        animation: diplayer-loading-dot-fade .8s ease infinite;
        opacity: 0;
        transform-origin: 4px 4px
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-7 {
        -webkit-animation-delay: .7s;
        animation-delay: .7s
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-6 {
        -webkit-animation-delay: .6s;
        animation-delay: .6s
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-5 {
        -webkit-animation-delay: .5s;
        animation-delay: .5s
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-4 {
        -webkit-animation-delay: .4s;
        animation-delay: .4s
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-3 {
        -webkit-animation-delay: .3s;
        animation-delay: .3s
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-2 {
        -webkit-animation-delay: .2s;
        animation-delay: .2s
    }

    .hplayer-bezel .diplayer-loading-icon .diplayer-loading-dot.diplayer-loading-dot-1 {
        -webkit-animation-delay: .1s;
        animation-delay: .1s
    }

    @-webkit-keyframes diplayer-loading-dot-fade {
        0% {
            opacity: .7;
            transform: scale(1.2)
        }

        50% {
            opacity: .25;
            transform: scale(.9)
        }

        to {
            opacity: .25;
            transform: scale(.85)
        }
    }

    @keyframes diplayer-loading-dot-fade {
        0% {
            opacity: .7;
            transform: scale(1.2)
        }

        50% {
            opacity: .25;
            transform: scale(.9)
        }

        to {
            opacity: .25;
            transform: scale(.85)
        }
    }

    .hplayer-controller-mask {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAADGCAYAAAAT+OqFAAAAdklEQVQoz42QQQ7AIAgEF/T/D+kbq/RWAlnQyyazA4aoAB4FsBSA/bFjuF1EOL7VbrIrBuusmrt4ZZORfb6ehbWdnRHEIiITaEUKa5EJqUakRSaEYBJSCY2dEstQY7AuxahwXFrvZmWl2rh4JZ07z9dLtesfNj5q0FU3A5ObbwAAAABJRU5ErkJggg==) repeat-x bottom;
        height: 98px;
        width: 100%
    }

    .hplayer-controller,
    .hplayer-controller-mask {
        position: absolute;
        bottom: 0;
        transition: all .3s ease;
        transform: translateZ(0)
    }

    .hplayer-controller {
        left: 0;
        right: 0;
        height: 41px;
        padding: 0 10px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .hplayer-controller.hplayer-controller-comment .hplayer-icons {
        display: none
    }

    .hplayer-controller.hplayer-controller-comment .hplayer-icons.hplayer-comment-box {
        display: block
    }

    .hplayer-controller .hplayer-bar-wrap {
        cursor: pointer;
        flex: 1;
        height: 3px;
        border-radius: 2px;
        padding: 0 10px
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-highlight {
        z-index: 12;
        position: absolute;
        top: 5px;
        width: 6px;
        height: 20%;
        border-radius: 6px;
        background-color: #fff;
        text-align: center;
        transform: translateX(-3px);
        transition: all .2s ease-in-out;
        display: block;
        width: 8px;
        transform: translateX(-4px);
        top: 4px;
        height: 40%
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-highlight:hover .hplayer-highlight-text {
        display: block
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-highlight:hover~.hplayer-bar-preview,
    .hplayer-controller .hplayer-bar-wrap .hplayer-highlight:hover~.hplayer-bar-time {
        opacity: 0
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-highlight .hplayer-highlight-text {
        display: none;
        position: absolute;
        left: 50%;
        top: -24px;
        padding: 5px 8px;
        background-color: rgba(0, 0, 0, .62);
        color: #fff;
        border-radius: 4px;
        font-size: 12px;
        white-space: nowrap;
        transform: translateX(-50%)
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-bar-preview {
        position: absolute;
        background: #fff;
        pointer-events: none;
        display: none;
        background-size: 16000px 100%;
        border-radius: 2px
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-bar-preview-canvas {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-bar {
        position: relative;
        height: 3px;
        width: 100%;
        background: hsla(0, 0%, 100%, .3);
        cursor: pointer;
        border-radius: 2px
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-bar .hplayer-loaded {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        background: hsla(0, 0%, 100%, .4);
        height: 3px;
        transition: all .5s ease;
        will-change: width;
        border-radius: 2px
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-bar .hplayer-played {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        height: 3px;
        will-change: width;
        border-radius: 2px;
        background: rgba(255, 65, 65, .7)
    }

    .hplayer-controller .hplayer-bar-wrap .hplayer-bar .hplayer-played .hplayer-thumb {
        position: absolute;
        top: 0;
        right: 5px;
        margin-top: -4px;
        margin-right: -10px;
        height: 11px;
        width: 11px;
        border-radius: 50%;
        cursor: pointer;
        transition: all .3s ease-in-out;
        transform: scale(1);
        background: #fff
    }

    .hplayer-controller .hplayer-all-time {
        height: 38px;
        line-height: 38px;
        color: #fff;
        font-size: 13px;
        text-shadow: 0 0 10px rgba(0, 0, 0, .3);
        font-weight: 400;
        margin-right: 3px
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box {
        display: none;
        position: absolute;
        transition: all .3s ease-in-out;
        z-index: 2;
        height: 38px;
        bottom: 0;
        left: 20px;
        right: 20px;
        color: #fff
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-icon {
        padding: 7px
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-icon {
        position: absolute;
        left: 0;
        top: 0
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-send-icon {
        position: absolute;
        right: 0;
        top: 0
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box {
        position: absolute;
        background: rgba(28, 28, 28, .9);
        bottom: 41px;
        left: 0;
        box-shadow: 0 0 25px rgba(0, 0, 0, .3);
        border-radius: 4px;
        padding: 10px 10px 16px;
        font-size: 14px;
        width: 204px;
        transition: all .3s ease-in-out;
        transform: scale(0)
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box.hplayer-comment-setting-open {
        transform: scale(1)
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box input[type=radio] {
        display: none
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box label {
        cursor: pointer
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-title {
        font-size: 13px;
        color: #fff;
        line-height: 30px
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-type {
        font-size: 0
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-type .hplayer-comment-setting-title {
        margin-bottom: 6px
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-type label:nth-child(2) span {
        border-radius: 4px 0 0 4px
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-type label:nth-child(4) span {
        border-radius: 0 4px 4px 0
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-type span {
        width: 33%;
        padding: 4px 6px;
        line-height: 16px;
        display: inline-block;
        font-size: 12px;
        color: #fff;
        border: 1px solid #fff;
        margin-right: -1px;
        box-sizing: border-box;
        text-align: center;
        cursor: pointer
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-type input:checked+span {
        background: #e4e4e6;
        color: #1c1c1c
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-color {
        font-size: 0
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-color label {
        font-size: 0;
        padding: 6px;
        display: inline-block
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-color span {
        width: 22px;
        height: 22px;
        display: inline-block;
        border-radius: 50%;
        box-sizing: border-box;
        cursor: pointer
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-setting-box .hplayer-comment-setting-color span:hover {
        -webkit-animation: my-face 5s ease-in-out infinite;
        animation: my-face 5s ease-in-out infinite
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-input {
        outline: none;
        border: none;
        padding: 8px 31px;
        font-size: 14px;
        line-height: 18px;
        text-align: center;
        border-radius: 4px;
        background: none;
        margin: 0;
        height: 100%;
        box-sizing: border-box;
        width: 100%;
        color: #fff
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-input::-moz-placeholder {
        color: #fff;
        opacity: .8
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-input:-ms-input-placeholder {
        color: #fff;
        opacity: .8
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-input::placeholder {
        color: #fff;
        opacity: .8
    }

    .hplayer-controller .hplayer-icons.hplayer-comment-box .hplayer-comment-input::-ms-clear {
        display: none
    }

    .hplayer-controller .hplayer-icons.hplayer-icons-left {
        display: flex;
        align-items: center
    }

    .hplayer-controller .hplayer-icons.hplayer-icons-right {
        right: 5px
    }

    .hplayer-controller .hplayer-icons .hplayer-live-badsge,
    .hplayer-controller .hplayer-icons .hplayer-time {
        line-height: 38px;
        color: #eee;
        text-shadow: 0 0 2px rgba(0, 0, 0, .5);
        vertical-align: middle;
        font-size: 13px;
        cursor: default
    }

    .hplayer-controller .hplayer-icons .hplayer-live-dot {
        display: inline-block;
        width: 6px;
        height: 6px;
        vertical-align: 4%;
        margin-right: 5px;
        content: "";
        border-radius: 6px
    }

    .hplayer-controller .hplayer-icons .hplayer-icon {
        width: 27px;
        height: 27px;
        padding: 5px;
        border: none;
        background-color: transparent;
        outline: none;
        cursor: pointer;
        vertical-align: middle;
        box-sizing: border-box;
        display: inline-block;
        font-size: 0
    }

    .hplayer-controller .hplayer-icons .hplayer-icon .hplayer-icon-content {
        transition: all .2s ease-in-out;
        opacity: .8
    }

    .hplayer-controller .hplayer-icons .hplayer-icon:hover .hplayer-icon-content {
        opacity: 1
    }

    .hplayer-controller .hplayer-icons .hplayer-icon.hplayer-quality-icon {
        color: #fff;
        width: auto;
        line-height: 22px;
        font-size: 14px
    }

    .hplayer-controller .hplayer-icons .hplayer-icon.hplayer-comment-icon {
        padding: 10px 9px 9px
    }

    .hplayer-controller .hplayer-icons .hplayer-icon.hplayer-setting-icon {
        padding-top: 8.5px
    }

    .hplayer-controller .hplayer-icons .hplayer-icon.hplayer-volume-icon {
        width: 27px
    }

    .hplayer-controller .hplayer-icons .hplayer-volume {
        position: relative;
        font-size: 0;
        height: 100%;
        padding-right: 3px
    }

    .hplayer-controller .hplayer-icons .hplayer-volume:hover .hplayer-volume-bar-wrap .hplayer-volume-bar {
        width: 45px
    }

    .hplayer-controller .hplayer-icons .hplayer-volume:hover .hplayer-volume-bar-wrap .hplayer-volume-bar .hplayer-volume-bar-inner .hplayer-thumb {
        transform: scale(1)
    }

    .hplayer-controller .hplayer-icons .hplayer-volume.hplayer-volume-active .hplayer-volume-bar-wrap .hplayer-volume-bar {
        width: 45px
    }

    .hplayer-controller .hplayer-icons .hplayer-volume.hplayer-volume-active .hplayer-volume-bar-wrap .hplayer-volume-bar .hplayer-volume-bar-inner .hplayer-thumb {
        transform: scale(1)
    }

    .hplayer-controller .hplayer-icons .hplayer-volume .hplayer-volume-bar-wrap {
        display: inline-block;
        margin: 0 10px 0 -5px;
        vertical-align: middle;
        height: 100%
    }

    .hplayer-controller .hplayer-icons .hplayer-volume .hplayer-volume-bar-wrap .hplayer-volume-bar {
        position: relative;
        top: 17px;
        width: 0;
        height: 3px;
        background: #aaa;
        transition: all .3s ease-in-out
    }

    .hplayer-controller .hplayer-icons .hplayer-volume .hplayer-volume-bar-wrap .hplayer-volume-bar .hplayer-volume-bar-inner {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 100%;
        transition: all .1s ease;
        will-change: width
    }

    .hplayer-controller .hplayer-icons .hplayer-volume .hplayer-volume-bar-wrap .hplayer-volume-bar .hplayer-volume-bar-inner .hplayer-thumb {
        position: absolute;
        top: 0;
        right: 5px;
        margin-top: -4px;
        margin-right: -10px;
        height: 11px;
        width: 11px;
        border-radius: 50%;
        cursor: pointer;
        transition: all .3s ease-in-out;
        transform: scale(1)
    }

    .hplayer-controller .hplayer-icons .hplayer-setting,
    .hplayer-controller .hplayer-icons .hplayer-subtitle-btn {
        display: inline-block;
        height: 100%
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box {
        position: absolute;
        right: 0;
        bottom: 50px;
        transform: scale(0);
        width: 150px;
        border-radius: 2px;
        background: rgba(28, 28, 28, .9);
        padding: 7px 0;
        transition: all .3s ease-in-out;
        overflow: hidden;
        z-index: 2
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box>div {
        display: none
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box>div.hplayer-setting-origin-panel {
        display: block
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box.hplayer-setting-box-open {
        transform: scale(1)
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box.hplayer-setting-box-narrow {
        width: 70px;
        text-align: center
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box.hplayer-setting-box-speed .hplayer-setting-origin-panel {
        display: none
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-box.hplayer-setting-box-speed .hplayer-setting-speed-panel {
        display: block
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-item,
    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-speed-item {
        height: 30px;
        padding: 5px 10px;
        box-sizing: border-box;
        cursor: pointer;
        position: relative
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-item:hover,
    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-speed-item:hover {
        background-color: hsla(0, 0%, 100%, .1)
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku {
        padding: 5px 0
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku .hplayer-label {
        padding: 0 10px;
        display: inline
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku:hover .hplayer-label {
        display: none
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku:hover .hplayer-danmaku-bar-wrap {
        display: inline-block
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku.hplayer-setting-danmaku-active .hplayer-label {
        display: none
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku.hplayer-setting-danmaku-active .hplayer-danmaku-bar-wrap {
        display: inline-block
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku .hplayer-danmaku-bar-wrap {
        padding: 0 10px;
        box-sizing: border-box;
        display: none;
        vertical-align: middle;
        height: 100%;
        width: 100%
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku .hplayer-danmaku-bar-wrap .hplayer-danmaku-bar {
        position: relative;
        top: 8.5px;
        width: 100%;
        height: 3px;
        background: #fff;
        transition: all .3s ease-in-out
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku .hplayer-danmaku-bar-wrap .hplayer-danmaku-bar .hplayer-danmaku-bar-inner {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 100%;
        transition: all .1s ease;
        background: #aaa;
        will-change: width
    }

    .hplayer-controller .hplayer-icons .hplayer-setting .hplayer-setting-danmaku .hplayer-danmaku-bar-wrap .hplayer-danmaku-bar .hplayer-danmaku-bar-inner .hplayer-thumb {
        position: absolute;
        top: 0;
        right: 5px;
        margin-top: -4px;
        margin-right: -10px;
        height: 11px;
        width: 11px;
        border-radius: 50%;
        cursor: pointer;
        transition: all .3s ease-in-out;
        background: #aaa
    }

    .hplayer-controller .hplayer-icons .hplayer-full {
        height: 100%;
        font-size: 0;
        padding-left: 3px;
        position: relative
    }

    .hplayer-controller .hplayer-icons .hplayer-full:hover .hplayer-full-in-icon {
        display: block
    }

    .hplayer-controller .hplayer-icons .hplayer-full .hplayer-full-in-icon {
        position: absolute;
        top: -30px;
        z-index: 1;
        display: none
    }

    .hplayer-controller .hplayer-icons .hplayer-quality {
        position: relative;
        display: inline-block;
        height: 100%;
        z-index: 2
    }

    .hplayer-controller .hplayer-icons .hplayer-quality:hover .hplayer-quality-list,
    .hplayer-controller .hplayer-icons .hplayer-quality:hover .hplayer-quality-mask {
        display: block
    }

    .hplayer-controller .hplayer-icons .hplayer-quality .hplayer-quality-mask {
        display: none;
        position: absolute;
        bottom: 38px;
        left: -18px;
        width: 80px;
        padding-bottom: 12px
    }

    .hplayer-controller .hplayer-icons .hplayer-quality .hplayer-quality-list {
        display: none;
        font-size: 12px;
        width: 80px;
        border-radius: 2px;
        background: rgba(28, 28, 28, .9);
        padding: 5px 0;
        transition: all .3s ease-in-out;
        overflow: hidden;
        color: #fff;
        text-align: center
    }

    .hplayer-controller .hplayer-icons .hplayer-quality .hplayer-quality-item {
        height: 25px;
        box-sizing: border-box;
        cursor: pointer;
        line-height: 25px
    }

    .hplayer-controller .hplayer-icons .hplayer-quality .hplayer-quality-item:hover {
        background-color: hsla(0, 0%, 100%, .1)
    }

    .hplayer-controller .hplayer-icons .hplayer-comment {
        display: inline-block;
        height: 100%
    }

    .hplayer-controller .hplayer-icons .hplayer-label {
        color: #eee;
        font-size: 13px;
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle {
        width: 32px;
        height: 20px;
        text-align: center;
        font-size: 0;
        vertical-align: middle;
        position: absolute;
        top: 5px;
        right: 10px
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input {
        max-height: 0;
        max-width: 0;
        display: none
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input+label {
        display: inline-block;
        position: relative;
        box-shadow: inset 0 0 0 0 #dfdfdf;
        border: 1px solid #dfdfdf;
        height: 20px;
        width: 32px;
        border-radius: 10px;
        box-sizing: border-box;
        cursor: pointer;
        transition: .2s ease-in-out
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input+label:after,
    .hplayer-controller .hplayer-icons .hplayer-toggle input+label:before {
        content: "";
        position: absolute;
        display: block;
        height: 18px;
        width: 18px;
        top: 0;
        left: 0;
        border-radius: 15px;
        transition: .2s ease-in-out
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input+label:after {
        background: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .4)
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input:checked+label {
        border-color: hsla(0, 0%, 100%, .5)
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input:checked+label:before {
        width: 30px;
        background: hsla(0, 0%, 100%, .5)
    }

    .hplayer-controller .hplayer-icons .hplayer-toggle input:checked+label:after {
        left: 12px
    }

    .hplayer-mobile-play {
        display: none
    }

    .hplayer-mobile-play .deplayer-play-icon {
        opacity: .8;
        opacity: 1
    }

    .hplayer-mobile-play .deplayer-pause-icon,
    .hplayer-mobile-play .deplayer-play-icon {
        width: 50px;
        height: 50px;
        border: none;
        background-color: transparent;
        outline: none;
        box-sizing: border-box;
        bottom: 0;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) translateZ(0)
    }

    .hplayer-mobile-play .deplayer-pause-icon {
        opacity: .8;
        opacity: 0
    }

    .hplayer-mobile-play.hplayer-mobile-pause-show .deplayer-play-icon {
        opacity: 0
    }

    .hplayer-mobile-play.hplayer-mobile-action-play .deplayer-play-icon,
    .hplayer-mobile-play.hplayer-mobile-pause-show .deplayer-pause-icon {
        opacity: 1
    }

    .hplayer-mobile-play.hplayer-mobile-action-pause .deplayer-play-icon,
    .hplayer-mobile-play.hplayer-mobile-action-play .deplayer-pause-icon {
        opacity: 0
    }

    .hplayer-mobile-play.hplayer-mobile-action-pause .deplayer-pause-icon {
        opacity: 1
    }

    .hplayer-danmaku {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        font-size: 22px;
        color: #fff
    }

    .hplayer-danmaku .hplayer-danmaku-item {
        display: inline-block;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        white-space: nowrap;
        text-shadow: .5px .5px .5px rgba(0, 0, 0, .5)
    }

    .hplayer-danmaku .hplayer-danmaku-item--demo {
        position: absolute;
        visibility: hidden
    }

    .hplayer-danmaku .hplayer-danmaku-right {
        position: absolute;
        right: 0;
        transform: translateX(100%)
    }

    .hplayer-danmaku .hplayer-danmaku-right.hplayer-danmaku-move {
        will-change: transform;
        -webkit-animation: danmaku 5s linear;
        animation: danmaku 5s linear;
        -webkit-animation-play-state: paused;
        animation-play-state: paused
    }

    @-webkit-keyframes danmaku {
        0% {
            transform: translateX(100%)
        }
    }

    @keyframes danmaku {
        0% {
            transform: translateX(100%)
        }
    }

    .hplayer-danmaku .hplayer-danmaku-bottom,
    .hplayer-danmaku .hplayer-danmaku-top {
        position: absolute;
        width: 100%;
        text-align: center;
        visibility: hidden
    }

    .hplayer-danmaku .hplayer-danmaku-bottom.hplayer-danmaku-move,
    .hplayer-danmaku .hplayer-danmaku-top.hplayer-danmaku-move {
        will-change: visibility;
        -webkit-animation: danmaku-center 4s linear;
        animation: danmaku-center 4s linear;
        -webkit-animation-play-state: paused;
        animation-play-state: paused
    }

    @-webkit-keyframes danmaku-center {
        0% {
            visibility: visible
        }

        to {
            visibility: visible
        }
    }

    @keyframes danmaku-center {
        0% {
            visibility: visible
        }

        to {
            visibility: visible
        }
    }

    .hplayer-logo {
        pointer-events: none;
        position: absolute;
        left: 20px;
        top: 20px;
        max-width: 50px;
        max-height: 50px
    }

    .hplayer-logo img {
        max-width: 100%;
        max-height: 100%;
        background: none
    }

    .hplayer-menu {
        position: absolute;
        width: 170px;
        border-radius: 2px;
        background: rgba(28, 28, 28, .85);
        padding: 5px 0;
        overflow: hidden;
        z-index: 3;
        display: none
    }

    .hplayer-menu.hplayer-menu-show {
        display: block
    }

    .hplayer-menu .hplayer-menu-item {
        height: 30px;
        box-sizing: border-box;
        cursor: pointer
    }

    .hplayer-menu .hplayer-menu-item:hover {
        background-color: hsla(0, 0%, 100%, .1)
    }

    .hplayer-menu .hplayer-menu-item a {
        padding: 0 10px;
        line-height: 30px;
        color: #eee;
        font-size: 13px;
        display: inline-block;
        vertical-align: middle;
        width: 100%;
        box-sizing: border-box;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden
    }

    .hplayer-menu .hplayer-menu-item a:hover {
        text-decoration: none
    }

    .hplayer-notice {
        opacity: 0;
        position: absolute;
        bottom: 48px;
        left: 13px;
        font-size: 14px;
        border-radius: 24px;
        background: rgba(17, 17, 17, .6);
        padding: 13px 17px;
        transition: all .3s ease-in-out;
        overflow: hidden;
        color: hsla(0, 0%, 100%, .8);
        pointer-events: none;
        transform: translateZ(0)
    }

    .hplayer-subtitle {
        position: absolute;
        bottom: 40px;
        width: 90%;
        left: 5%;
        text-align: center;
        color: #fff;
        text-shadow: .5px .5px .5px rgba(0, 0, 0, .5);
        font-size: 20px
    }

    .hplayer-subtitle.hplayer-subtitle-hide {
        display: none
    }

    video::-webkit-media-controls-fullscreen-button,
    video::-webkit-media-controls-play-button {
        display: none
    }

    video::-webkit-media-controls-current-time-display,
    video::-webkit-media-controls-timeline {
        display: none
    }

    video::-webkit-media-controls-mute-button,
    video::-webkit-media-controls-time-remaining-display {
        display: none
    }

    video::-webkit-media-controls-toggle-closed-captions-button,
    video::-webkit-media-controls-volume-slider {
        display: none
    }

    video::-webkit-media-controls-enclosure {
        display: none
    }

    .hplayer-mask {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        display: none
    }

    .hplayer-mask.hplayer-mask-show {
        display: block
    }

    .hplayer-video-wrap {
        position: relative;
        font-size: 0;
        width: 100%;
        height: 100%
    }

    .hplayer-video-wrap .hplayer-video {
        width: 100%;
        height: 100%;
        display: none
    }

    .hplayer-video-wrap .hplayer-video-current {
        display: block
    }

    .hplayer-video-wrap .hplayer-video-prepare {
        display: none
    }

    .hplayer-info-panel {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 400px;
        background: rgba(28, 28, 28, .8);
        padding: 10px;
        color: #fff;
        font-size: 12px;
        border-radius: 2px
    }

    .hplayer-info-panel-hide {
        display: none
    }

    .hplayer-info-panel .hplayer-info-panel-close {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px
    }

    .hplayer-info-panel .hplayer-info-panel-item>span {
        display: inline-block;
        vertical-align: middle;
        line-height: 15px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden
    }

    .hplayer-info-panel .hplayer-info-panel-item-title {
        width: 100px;
        text-align: right;
        margin-right: 10px
    }

    .hplayer-info-panel .hplayer-info-panel-item-data {
        width: 260px
    }

    .hplayer-press {
        display: none;
        position: absolute;
        top: 14px;
        left: 50%;
        transform: translateX(-50%);
        align-items: center;
        justify-content: center;
        width: 115px;
        height: 30px;
        background: rgba(17, 17, 17, .6);
        border-radius: 26.25px
    }

    .hplayer-press.hplayer-press-modal-show {
        display: flex
    }

    .hplayer-press .hplayer-icon-press {
        display: none;
        width: 24px;
        height: 24px;
        background: transparent;
        background-size: 100% 100%;
        margin-right: 6px
    }

    .hplayer-press .hplayer-icon-press.icon-press-show {
        display: block
    }

    .hplayer-press p {
        font-family: PingFangSC-Regular;
        font-size: 12px;
        color: #fff;
        line-height: 30px;
        font-weight: 400;
        margin: 0
    }

    .hplayer-press .hplayer-press-speed {
        font-family: PingFangSC-Semibold;
        font-size: 14px;
        font-weight: 600
    }

    .hplayer-swipe {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 124px;
        height: 85px;
        background: rgba(17, 17, 17, .7);
        border-radius: 4px
    }

    .hplayer-swipe.hplayer-swipe-show {
        display: block
    }

    .hplayer-swipe .hplayer-icon-swipe {
        display: none;
        width: 26px;
        height: 26px;
        margin: 12px auto 7px
    }

    .hplayer-swipe .hplayer-icon-swipe.swipe-icon-show {
        display: block
    }

    .hplayer-swipe .swipe-time-text {
        display: flex;
        justify-content: center
    }

    .hplayer-swipe .swipe-time-text .current-time-text,
    .hplayer-swipe .swipe-time-text .total-time-text {
        font-family: PingFangSC-Regular;
        font-size: 12px;
        color: #999;
        line-height: 12.17px;
        font-weight: 400;
        margin: 0
    }

    .hplayer-swipe .swipe-time-text .current-time-text {
        color: #fff
    }

    .hplayer-swipe .swipe-content {
        position: relative;
        width: 77px;
        height: 2px;
        background: #e0e0e0;
        border-radius: .83px;
        margin: 9px auto 0
    }

    .hplayer-swipe .swipe-content .swipe-bar {
        position: absolute;
        top: 0;
        left: 0;
        height: 2px;
        background: #ff4d4d;
        border-radius: .83px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jc3MvaW5kZXguc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBd0QsVUFBVSw2QkFBNkIsQ0FBQyx3SEFBd0gsQ0FBQywyQkFBMkIsR0FBRywwQ0FBMEMsQ0FBQyxHQUFHLDJDQUEyQyxDQUFDLEdBQUcsMkNBQTJDLENBQUMsR0FBRyw0Q0FBNEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxJQUFJLDJDQUEyQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSx3Q0FBd0MsQ0FBQyxJQUFJLHlDQUF5QyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDJDQUEyQyxDQUFDLElBQUkseUNBQXlDLENBQUMsSUFBSSx3Q0FBd0MsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLHlDQUF5QyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxJQUFJLHlDQUF5QyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLHlDQUF5QyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSw0Q0FBNEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLHlDQUF5QyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxNQUFNLG1DQUFtQyxDQUFDLENBQUMsbUJBQW1CLEdBQUcsMENBQTBDLENBQUMsR0FBRywyQ0FBMkMsQ0FBQyxHQUFHLDJDQUEyQyxDQUFDLEdBQUcsNENBQTRDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksd0NBQXdDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDJDQUEyQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDJDQUEyQyxDQUFDLElBQUkseUNBQXlDLENBQUMsSUFBSSwyQ0FBMkMsQ0FBQyxJQUFJLHlDQUF5QyxDQUFDLElBQUksd0NBQXdDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDJDQUEyQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMkNBQTJDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUkseUNBQXlDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksMENBQTBDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUksNENBQTRDLENBQUMsSUFBSSwwQ0FBMEMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFDLElBQUkseUNBQXlDLENBQUMsSUFBSSx5Q0FBeUMsQ0FBQyxJQUFJLDBDQUEwQyxDQUFD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Q0FBQyxnQkFBZ0IsQ0FBQyxtREFBbUQsYUFBYSxDQUFDLGlCQUFpQiw4QkFBOEIsQ0FBQyxjQUFjLENBQUMsVUFBVSxDQUFDLGdCQUFnQixDQUFDLGVBQWUsQ0FBQyxRQUFRLENBQUMsb0NBQW9DLCtCQUErQixDQUFDLGNBQWMsQ0FBQyxlQUFlLENBQUMsZUFBZSxZQUFZLENBQUMsaUJBQWlCLENBQUMsT0FBTyxDQUFDLFFBQVEsQ0FBQyw4QkFBOEIsQ0FBQyxXQUFXLENBQUMsV0FBVyxDQUFDLDRCQUE0QixDQUFDLGlCQUFpQixDQUFDLGtDQUFrQyxhQUFhLENBQUMsbUNBQW1DLFlBQVksQ0FBQyxVQUFVLENBQUMsV0FBVyxDQUFDLG9CQUFvQixDQUFDLG1EQUFtRCxhQUFhLENBQUMsZ0NBQWdDLFlBQVksQ0FBQyxzQkFBc0IsQ0FBQyxvR0FBb0csOEJBQThCLENBQUMsY0FBYyxDQUFDLFVBQVUsQ0FBQyxtQkFBbUIsQ0FBQyxlQUFlLENBQUMsUUFBUSxDQUFDLG1EQUFtRCxVQUFVLENBQUMsOEJBQThCLGlCQUFpQixDQUFDLFVBQVUsQ0FBQyxVQUFVLENBQUMsa0JBQWtCLENBQUMsbUJBQW1CLENBQUMsaUJBQWlCLENBQUMseUNBQXlDLGlCQUFpQixDQUFDLEtBQUssQ0FBQyxNQUFNLENBQUMsVUFBVSxDQUFDLGtCQUFrQixDQUFDLG1CQUFtQiIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgdXJsKC4uLy4uL25vZGVfbW9kdWxlcy9iYWxsb29uLWNzcy9iYWxsb29uLmNzcyk7Ym9keSxodG1se2hlaWdodDotd2Via2l0LWZpbGwtYXZhaWxhYmxlO2ZvbnQtZmFtaWx5Oi1hcHBsZS1zeXN0ZW0sQmxpbmtNYWNTeXN0ZW1Gb250LFBpbmdGYW5nIFNDLEhlbHZldGljYSBOZXVlLFNUSGVpdGksTWljcm9zb2Z0IFlhaGVpLFRhaG9tYSxTaW1zdW4sc2Fucy1zZXJpZn1ALXdlYmtpdC1rZXlmcmFtZXMgbXktZmFjZXsyJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKDEuNWRlZyl9NCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEuNXB4KSByb3RhdGUoLS41ZGVnKX02JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKC0xLjVkZWcpfTgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKC0xLjVkZWcpfTEwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgyLjVweCkgcm90YXRlKDEuNWRlZyl9MTIle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMS41ZGVnKX0xNCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEuNXB4KSByb3RhdGUoMS41ZGVnKX0xNiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSgtMS41ZGVnKX0xOCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKC0xLjVkZWcpfTIwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtMS41cHgpIHJvdGF0ZSgyLjVkZWcpfTIyJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSguNXB4KSByb3RhdGUoLTEuNWRlZyl9MjQle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEuNXB4KSByb3RhdGUoMS41ZGVnKX0yNiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKC41ZGVnKX0yOCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKDEuNWRlZyl9MzAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMi41ZGVnKX0zMiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMS41cHgpIHJvdGF0ZSgtLjVkZWcpfTM0JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKC0uNWRlZyl9MzYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKDIuNWRlZyl9Mzgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEuNXB4KSByb3RhdGUoLTEuNWRlZyl9NDAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMi41ZGVnKX00MiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMi41cHgpIHJvdGF0ZSgtMS41ZGVnKX00NCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMS41cHgpIHJvdGF0ZSguNWRlZyl9NDYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKDIuNWRlZyl9NDgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoLjVkZWcpfTUwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSguNXB4KSByb3RhdGUoLjVkZWcpfTUyJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgyLjVweCkgcm90YXRlKDIuNWRlZyl9NTQle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKDEuNWRlZyl9NTYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoMi41ZGVnKX01OCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKDIuNWRlZyl9NjAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoMi41ZGVnKX02MiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSgyLjVkZWcpfTY0JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtLjVweCkgcm90YXRlKDEuNWRlZyl9NjYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEuNXB4KSByb3RhdGUoLS41ZGVnKX02OCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEuNXB4KSByb3RhdGUoLS41ZGVnKX03MCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMS41cHgpIHJvdGF0ZSguNWRlZyl9NzIle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoMS41ZGVnKX03NCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSguNWRlZyl9NzYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMi41ZGVnKX03OCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSgxLjVkZWcpfTgwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKDEuNWRlZyl9ODIle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoLjVkZWcpfTg0JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKDIuNWRlZyl9ODYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKC0xLjVkZWcpfTg4JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtLjVweCkgcm90YXRlKDIuNWRlZyl9OTAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoLS41ZGVnKX05MiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKC0uNWRlZyl9OTQle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoLjVkZWcpfTk2JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtLjVweCkgcm90YXRlKDEuNWRlZyl9OTgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKC0uNWRlZyl9MCUsdG97dHJhbnNmb3JtOnRyYW5zbGF0ZSgwKSByb3RhdGUoMGRlZyl9fUBrZXlmcmFtZXMgbXktZmFjZXsyJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKDEuNWRlZyl9NCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEuNXB4KSByb3RhdGUoLS41ZGVnKX02JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKC0xLjVkZWcpfTgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKC0xLjVkZWcpfTEwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgyLjVweCkgcm90YXRlKDEuNWRlZyl9MTIle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMS41ZGVnKX0xNCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEuNXB4KSByb3RhdGUoMS41ZGVnKX0xNiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSgtMS41ZGVnKX0xOCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKC0xLjVkZWcpfTIwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtMS41cHgpIHJvdGF0ZSgyLjVkZWcpfTIyJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSguNXB4KSByb3RhdGUoLTEuNWRlZyl9MjQle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEuNXB4KSByb3RhdGUoMS41ZGVnKX0yNiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKC41ZGVnKX0yOCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKDEuNWRlZyl9MzAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMi41ZGVnKX0zMiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMS41cHgpIHJvdGF0ZSgtLjVkZWcpfTM0JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKC0uNWRlZyl9MzYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKDIuNWRlZyl9Mzgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEuNXB4KSByb3RhdGUoLTEuNWRlZyl9NDAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMi41ZGVnKX00MiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMi41cHgpIHJvdGF0ZSgtMS41ZGVnKX00NCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMS41cHgpIHJvdGF0ZSguNWRlZyl9NDYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKDIuNWRlZyl9NDgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoLjVkZWcpfTUwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSguNXB4KSByb3RhdGUoLjVkZWcpfTUyJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgyLjVweCkgcm90YXRlKDIuNWRlZyl9NTQle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKDEuNWRlZyl9NTYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoMi41ZGVnKX01OCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKDIuNWRlZyl9NjAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoMi41ZGVnKX02MiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSgyLjVkZWcpfTY0JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtLjVweCkgcm90YXRlKDEuNWRlZyl9NjYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEuNXB4KSByb3RhdGUoLS41ZGVnKX02OCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEuNXB4KSByb3RhdGUoLS41ZGVnKX03MCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMS41cHgpIHJvdGF0ZSguNWRlZyl9NzIle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoMS41ZGVnKX03NCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSguNWRlZyl9NzYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoMi41ZGVnKX03OCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLS41cHgpIHJvdGF0ZSgxLjVkZWcpfTgwJXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKDEuNWRlZyl9ODIle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0uNXB4KSByb3RhdGUoLjVkZWcpfTg0JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxLjVweCkgcm90YXRlKDIuNWRlZyl9ODYle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKC0xLjVkZWcpfTg4JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtLjVweCkgcm90YXRlKDIuNWRlZyl9OTAle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoLS41ZGVnKX05MiV7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLjVweCkgcm90YXRlKC0uNWRlZyl9OTQle3RyYW5zZm9ybTp0cmFuc2xhdGVZKDIuNXB4KSByb3RhdGUoLjVkZWcpfTk2JXt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtLjVweCkgcm90YXRlKDEuNWRlZyl9OTgle3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xLjVweCkgcm90YXRlKC0uNWRlZyl9MCUsdG97dHJhbnNmb3JtOnRyYW5zbGF0ZSgwKSByb3RhdGUoMGRlZyl9fS5ocGxheWVye3Bvc2l0aW9uOnJlbGF0aXZlO292ZXJmbG93OmhpZGRlbjstd2Via2l0LXVzZXItc2VsZWN0Om5vbmU7LW1vei11c2VyLXNlbGVjdDpub25lOy1tcy11c2VyLXNlbGVjdDpub25lO3VzZXItc2VsZWN0Om5vbmU7bGluZS1oZWlnaHQ6MX0uaHBsYXllciAqe2JveC1zaXppbmc6Y29udGVudC1ib3h9LmhwbGF5ZXIgc3Zne3dpZHRoOjEwMCU7aGVpZ2h0OjEwMCV9LmhwbGF5ZXIgc3ZnIGNpcmNsZSwuaHBsYXllciBzdmcgcGF0aHtmaWxsOiNmZmZ9LmhwbGF5ZXI6LXdlYmtpdC1mdWxsLXNjcmVlbnt3aWR0aDoxMDAlO2hlaWdodDoxMDAlO2JhY2tncm91bmQ6IzAwMDtwb3NpdGlvbjpmaXhlZDt6LWluZGV4OjEwMDAwO2xlZnQ6MDt0b3A6MDttYXJnaW46MDtwYWRkaW5nOjA7dHJhbnNmb3JtOnRyYW5zbGF0ZVooMCl9LmhwbGF5ZXI6LXdlYmtpdC1mdWxsLXNjcmVlbiAuaHBsYXllci1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtYm90dG9tLmhwbGF5ZXItZGFubWFrdS1tb3ZlLC5ocGxheWVyOi13ZWJraXQtZnVsbC1zY3JlZW4gLmhwbGF5ZXItZGFubWFrdSAuaHBsYXllci1kYW5tYWt1LXRvcC5ocGxheWVyLWRhbm1ha3UtbW92ZXstd2Via2l0LWFuaW1hdGlvbjpkYW5tYWt1LWNlbnRlciA2cyBsaW5lYXI7YW5pbWF0aW9uOmRhbm1ha3UtY2VudGVyIDZzIGxpbmVhcjstd2Via2l0LWFuaW1hdGlvbi1wbGF5LXN0YXRlOmluaGVyaXQ7YW5pbWF0aW9uLXBsYXktc3RhdGU6aW5oZXJpdH0uaHBsYXllcjotd2Via2l0LWZ1bGwtc2NyZWVuIC5ocGxheWVyLWRhbm1ha3UgLmhwbGF5ZXItZGFubWFrdS1yaWdodC5ocGxheWVyLWRhbm1ha3UtbW92ZXstd2Via2l0LWFuaW1hdGlvbjpkYW5tYWt1IDhzIGxpbmVhcjthbmltYXRpb246ZGFubWFrdSA4cyBsaW5lYXI7LXdlYmtpdC1hbmltYXRpb24tcGxheS1zdGF0ZTppbmhlcml0O2FuaW1hdGlvbi1wbGF5LXN0YXRlOmluaGVyaXR9LmhwbGF5ZXIuaHBsYXllci1saXZlIC5ocGxheWVyLWJhci13cmFwLC5ocGxheWVyLmhwbGF5ZXItbGl2ZS5ocGxheWVyLW5vLWRhbm1ha3UgLmhwbGF5ZXItc2V0dGluZywuaHBsYXllci5ocGxheWVyLWxpdmUgLmhwbGF5ZXItc2V0dGluZy1sb29wLC5ocGxheWVyLmhwbGF5ZXItbGl2ZSAuaHBsYXllci1zZXR0aW5nLXNwZWVkLC5ocGxheWVyLmhwbGF5ZXItbGl2ZSAuaHBsYXllci10aW1lLC5ocGxheWVyLmhwbGF5ZXItbm8tZGFubWFrdSAuaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLWNvbW1lbnQsLmhwbGF5ZXIuaHBsYXllci1uby1kYW5tYWt1IC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWJveCAuaHBsYXllci1zZXR0aW5nLWRhbm1ha3UsLmhwbGF5ZXIuaHBsYXllci1uby1kYW5tYWt1IC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWJveCAuaHBsYXllci1zZXR0aW5nLWRhbnVubGltaXQsLmhwbGF5ZXIuaHBsYXllci1uby1kYW5tYWt1IC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWJveCAuaHBsYXllci1zZXR0aW5nLXNob3dkYW4sLmhwbGF5ZXIuaHBsYXllci1uby1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3V7ZGlzcGxheTpub25lfS5ocGxheWVyLmhwbGF5ZXItYXJyb3cgLmhwbGF5ZXItZGFubWFrdXtmb250LXNpemU6MThweH0uaHBsYXllci5ocGxheWVyLWFycm93IC5ocGxheWVyLWljb257bWFyZ2luOjAgLTNweH0uaHBsYXllci5ocGxheWVyLXBsYXlpbmcgLmhwbGF5ZXItZGFubWFrdSAuaHBsYXllci1kYW5tYWt1LW1vdmV7LXdlYmtpdC1hbmltYXRpb24tcGxheS1zdGF0ZTpydW5uaW5nO2FuaW1hdGlvbi1wbGF5LXN0YXRlOnJ1bm5pbmd9QG1lZGlhIChtaW4td2lkdGg6OTAwcHgpey5ocGxheWVyLmhwbGF5ZXItcGxheWluZyAuaHBsYXllci1jb250cm9sbGVyLC5ocGxheWVyLmhwbGF5ZXItcGxheWluZyAuaHBsYXllci1jb250cm9sbGVyLW1hc2t7b3BhY2l0eTowfS5ocGxheWVyLmhwbGF5ZXItcGxheWluZzpob3ZlciAuaHBsYXllci1jb250cm9sbGVyLC5ocGxheWVyLmhwbGF5ZXItcGxheWluZzpob3ZlciAuaHBsYXllci1jb250cm9sbGVyLW1hc2t7b3BhY2l0eToxfX0uaHBsYXllci5ocGxheWVyLWxvYWRpbmcgLmhwbGF5ZXItYmV6ZWwgLmRpcGxheWVyLWxvYWRpbmctaWNvbntkaXNwbGF5OmJsb2NrfS5ocGxheWVyLmhwbGF5ZXItbG9hZGluZyAuaHBsYXllci1kYW5tYWt1LC5ocGxheWVyLmhwbGF5ZXItbG9hZGluZyAuaHBsYXllci1kYW5tYWt1LW1vdmUsLmhwbGF5ZXIuaHBsYXllci1wYXVzZWQgLmhwbGF5ZXItZGFubWFrdSwuaHBsYXllci5ocGxheWVyLXBhdXNlZCAuaHBsYXllci1kYW5tYWt1LW1vdmV7LXdlYmtpdC1hbmltYXRpb24tcGxheS1zdGF0ZTpwYXVzZWQ7YW5pbWF0aW9uLXBsYXktc3RhdGU6cGF1c2VkfS5ocGxheWVyLmhwbGF5ZXItaGlkZS1jb250cm9sbGVye2N1cnNvcjpub25lfS5ocGxheWVyLmhwbGF5ZXItaGlkZS1jb250cm9sbGVyIC5ocGxheWVyLWNvbnRyb2xsZXIsLmhwbGF5ZXIuaHBsYXllci1oaWRlLWNvbnRyb2xsZXIgLmhwbGF5ZXItY29udHJvbGxlci1tYXNre29wYWNpdHk6MDt0cmFuc2Zvcm06dHJhbnNsYXRlWSgxMDAlKX0uaHBsYXllci5ocGxheWVyLWhpZGUtY29udHJvbGxlciAuaHBsYXllci1zcGVlZHtvcGFjaXR5OjB9LmhwbGF5ZXIgLmhwbGF5ZXItc3BlZWR7YmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDtoZWlnaHQ6MTAwJX0uaHBsYXllciAuaHBsYXllci1zcGVlZCAuaHBsYXllci1pY29ue3Bvc2l0aW9uOmFic29sdXRlO3JpZ2h0OjVweDt0b3A6NTAlO3BhZGRpbmc6NXB4O2JvdHRvbTppbmhlcml0O3RyYW5zZm9ybTp0cmFuc2xhdGVZKC01MCUpIHRyYW5zbGF0ZVooMCk7d2lkdGg6MzJweDtoZWlnaHQ6MzJweDtib3JkZXI6bm9uZTtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O291dGxpbmU6bm9uZTtjdXJzb3I6cG9pbnRlcjt2ZXJ0aWNhbC1hbGlnbjptaWRkbGU7Ym94LXNpemluZzpib3JkZXItYm94O3otaW5kZXg6Mn0uaHBsYXllciAuaHBsYXllci1zcGVlZCAuaHBsYXllci1pY29uIC5ocGxheWVyLWljb24tY29udGVudHt0cmFuc2l0aW9uOmFsbCAuMnMgZWFzZS1pbi1vdXQ7b3BhY2l0eTouOH0uaHBsYXllciAuaHBsYXllci1zcGVlZCAuaHBsYXllci1zcGVlZC1tYXNre2JhY2tncm91bmQtaW1hZ2U6bGluZWFyLWdyYWRpZW50KDI3MGRlZyxyZ2JhKDUsNSwxMiwuOTUpLHJnYmEoNSw1LDEyLC45NSkgMTUlLHJnYmEoNSw1LDEyLC44KSA0OCUscmdiYSg1LDUsMTIsLjYpIDY2JSxyZ2JhKDUsNSwxMiwuMzUpIDgxJSxyZ2JhKDUsNSwxMiwuMTEpIDkzJSxyZ2JhKDUsNSwxMiwwKSk7aGVpZ2h0OjEwMCU7d2lkdGg6MzUlO3Bvc2l0aW9uOmFic29sdXRlO3JpZ2h0Oi0xMDAlO3RvcDowO3RyYW5zaXRpb246YWxsIC4yczt6LWluZGV4OjEwO3RyYW5zZm9ybTp0cmFuc2xhdGVaKDApfS5ocGxheWVyIC5ocGxheWVyLXNwZWVkIC5ocGxheWVyLXNwZWVkLW1hc2sgLmhwbGF5ZXItc3BlZWQtbGlzdHtkaXNwbGF5OmZsZXg7ZmxleC1kaXJlY3Rpb246Y29sdW1uO2p1c3RpZnktY29udGVudDpzcGFjZS1hcm91bmQ7aGVpZ2h0OjEwMCV9LmhwbGF5ZXIgLmhwbGF5ZXItc3BlZWQgLmhwbGF5ZXItc3BlZWQtbWFzayAuaHBsYXllci1zcGVlZC1pdGVte2ZvbnQtc2l6ZToxNHB4O2NvbG9yOiNmZmY7bGV0dGVyLXNwYWNpbmc6MDtsaW5lLWhlaWdodDozMHB4O2ZvbnQtd2VpZ2h0OjYwMDt0ZXh0LWFsaWduOmNlbnRlcn0uaHBsYXllciAuaHBsYXllci1zcGVlZC5ocGxheWVyLXNwZWVkLW1hc2staGlkZSAuaHBsYXllci1zcGVlZC1tYXNre3JpZ2h0Oi0xMDAlfS5ocGxheWVyIC5ocGxheWVyLXNwZWVkLmhwbGF5ZXItc3BlZWQtbWFzay1zaG93IC5ocGxheWVyLXNwZWVkLW1hc2t7cmlnaHQ6MH0uaHBsYXllci5ocGxheWVyLXNob3ctY29udHJvbGxlciAuaHBsYXllci1jb250cm9sbGVyLC5ocGxheWVyLmhwbGF5ZXItc2hvdy1jb250cm9sbGVyIC5ocGxheWVyLWNvbnRyb2xsZXItbWFza3tvcGFjaXR5OjF9LmhwbGF5ZXIuaHBsYXllci1mdWxsZWR7cG9zaXRpb246Zml4ZWQ7ei1pbmRleDoxMDAwMDtsZWZ0OjA7dG9wOjA7d2lkdGg6MTAwdmg7aGVpZ2h0OjEwMHZ3O3RyYW5zZm9ybTp0cmFuc2xhdGUoMTAwdncpIHJvdGF0ZSg5MGRlZykgdHJhbnNsYXRlWigwKTt0cmFuc2Zvcm0tb3JpZ2luOmxlZnQgdG9wfS5ocGxheWVyLmhwbGF5ZXItbW9iaWxlIC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItZnVsbCAuaHBsYXllci1mdWxsLWluLWljb257cG9zaXRpb246c3RhdGljO2Rpc3BsYXk6aW5saW5lLWJsb2NrfS5ocGxheWVyLmhwbGF5ZXItbW9iaWxlIC5ocGxheWVyLWJhci10aW1lLC5ocGxheWVyLmhwbGF5ZXItbW9iaWxlLmhwbGF5ZXItaGlkZS1jb250cm9sbGVyIC5ocGxheWVyLW1vYmlsZS1wbGF5e2Rpc3BsYXk6bm9uZX0uaHBsYXllci5ocGxheWVyLW1vYmlsZSAuaHBsYXllci1tb2JpbGUtcGxheXtkaXNwbGF5OmJsb2NrfS5ocGxheWVyLXdlYi1mdWxsc2NyZWVuLWZpeHtwb3NpdGlvbjpmaXhlZDt0b3A6MDtsZWZ0OjA7bWFyZ2luOjA7cGFkZGluZzowfVtkYXRhLWJhbGxvb25dOmJlZm9yZXtkaXNwbGF5Om5vbmV9W2RhdGEtYmFsbG9vbl06YWZ0ZXJ7cGFkZGluZzouM2VtIC43ZW07YmFja2dyb3VuZDpyZ2JhKDE3LDE3LDE3LC43KX1bZGF0YS1iYWxsb29uXVtkYXRhLWJhbGxvb24tcG9zPXVwXTphZnRlcnttYXJnaW4tYm90dG9tOjB9LmhwbGF5ZXItYmV6ZWx7cG9zaXRpb246YWJzb2x1dGU7bGVmdDowO3JpZ2h0OjA7dG9wOjA7Ym90dG9tOjA7Zm9udC1zaXplOjIycHg7Y29sb3I6I2ZmZjtwb2ludGVyLWV2ZW50czpub25lfS5ocGxheWVyLWJlemVsIC5ocGxheWVyLWJlemVsLWljb257cG9zaXRpb246YWJzb2x1dGU7dG9wOjUwJTtsZWZ0OjUwJTttYXJnaW46LTI2cHggMCAwIC0yNnB4O2hlaWdodDo1MnB4O3dpZHRoOjUycHg7cGFkZGluZzoxMnB4O2JveC1zaXppbmc6Ym9yZGVyLWJveDtiYWNrZ3JvdW5kOnJnYmEoMCwwLDAsLjUpO2JvcmRlci1yYWRpdXM6NTAlO29wYWNpdHk6MDtwb2ludGVyLWV2ZW50czpub25lfS5ocGxheWVyLWJlemVsIC5ocGxheWVyLWJlemVsLWljb24uaHBsYXllci1iZXplbC10cmFuc2l0aW9uey13ZWJraXQtYW5pbWF0aW9uOmJlemVsLWhpZGUgLjVzIGxpbmVhcjthbmltYXRpb246YmV6ZWwtaGlkZSAuNXMgbGluZWFyfUAtd2Via2l0LWtleWZyYW1lcyBiZXplbC1oaWRlezAle29wYWNpdHk6MTt0cmFuc2Zvcm06c2NhbGUoMSl9dG97b3BhY2l0eTowO3RyYW5zZm9ybTpzY2FsZSgyKX19QGtleWZyYW1lcyBiZXplbC1oaWRlezAle29wYWNpdHk6MTt0cmFuc2Zvcm06c2NhbGUoMSl9dG97b3BhY2l0eTowO3RyYW5zZm9ybTpzY2FsZSgyKX19LmhwbGF5ZXItYmV6ZWwgLmhwbGF5ZXItZGFubG9hZGluZ3twb3NpdGlvbjphYnNvbHV0ZTt0b3A6NTAlO21hcmdpbi10b3A6LTdweDt3aWR0aDoxMDAlO3RleHQtYWxpZ246Y2VudGVyO2ZvbnQtc2l6ZToxNHB4O2xpbmUtaGVpZ2h0OjE0cHg7LXdlYmtpdC1hbmltYXRpb246bXktZmFjZSA1cyBlYXNlLWluLW91dCBpbmZpbml0ZTthbmltYXRpb246bXktZmFjZSA1cyBlYXNlLWluLW91dCBpbmZpbml0ZX0uaHBsYXllci1iZXplbCAuZGlwbGF5ZXItbG9hZGluZy1pY29ue2Rpc3BsYXk6bm9uZTtwb3NpdGlvbjphYnNvbHV0ZTt0b3A6NTAlO2xlZnQ6NTAlO21hcmdpbjotMThweCAwIDAgLTE4cHg7aGVpZ2h0OjM2cHg7d2lkdGg6MzZweDtwb2ludGVyLWV2ZW50czpub25lfS5ocGxheWVyLWJlemVsIC5kaXBsYXllci1sb2FkaW5nLWljb24gLmRpcGxheWVyLWxvYWRpbmctaGlkZXtkaXNwbGF5Om5vbmV9LmhwbGF5ZXItYmV6ZWwgLmRpcGxheWVyLWxvYWRpbmctaWNvbiAuZGlwbGF5ZXItbG9hZGluZy1kb3R7LXdlYmtpdC1hbmltYXRpb246ZGlwbGF5ZXItbG9hZGluZy1kb3QtZmFkZSAuOHMgZWFzZSBpbmZpbml0ZTthbmltYXRpb246ZGlwbGF5ZXItbG9hZGluZy1kb3QtZmFkZSAuOHMgZWFzZSBpbmZpbml0ZTtvcGFjaXR5OjA7dHJhbnNmb3JtLW9yaWdpbjo0cHggNHB4fS5ocGxheWVyLWJlemVsIC5kaXBsYXllci1sb2FkaW5nLWljb24gLmRpcGxheWVyLWxvYWRpbmctZG90LmRpcGxheWVyLWxvYWRpbmctZG90LTd7LXdlYmtpdC1hbmltYXRpb24tZGVsYXk6LjdzO2FuaW1hdGlvbi1kZWxheTouN3N9LmhwbGF5ZXItYmV6ZWwgLmRpcGxheWVyLWxvYWRpbmctaWNvbiAuZGlwbGF5ZXItbG9hZGluZy1kb3QuZGlwbGF5ZXItbG9hZGluZy1kb3QtNnstd2Via2l0LWFuaW1hdGlvbi1kZWxheTouNnM7YW5pbWF0aW9uLWRlbGF5Oi42c30uaHBsYXllci1iZXplbCAuZGlwbGF5ZXItbG9hZGluZy1pY29uIC5kaXBsYXllci1sb2FkaW5nLWRvdC5kaXBsYXllci1sb2FkaW5nLWRvdC01ey13ZWJraXQtYW5pbWF0aW9uLWRlbGF5Oi41czthbmltYXRpb24tZGVsYXk6LjVzfS5ocGxheWVyLWJlemVsIC5kaXBsYXllci1sb2FkaW5nLWljb24gLmRpcGxheWVyLWxvYWRpbmctZG90LmRpcGxheWVyLWxvYWRpbmctZG90LTR7LXdlYmtpdC1hbmltYXRpb24tZGVsYXk6LjRzO2FuaW1hdGlvbi1kZWxheTouNHN9LmhwbGF5ZXItYmV6ZWwgLmRpcGxheWVyLWxvYWRpbmctaWNvbiAuZGlwbGF5ZXItbG9hZGluZy1kb3QuZGlwbGF5ZXItbG9hZGluZy1kb3QtM3std2Via2l0LWFuaW1hdGlvbi1kZWxheTouM3M7YW5pbWF0aW9uLWRlbGF5Oi4zc30uaHBsYXllci1iZXplbCAuZGlwbGF5ZXItbG9hZGluZy1pY29uIC5kaXBsYXllci1sb2FkaW5nLWRvdC5kaXBsYXllci1sb2FkaW5nLWRvdC0yey13ZWJraXQtYW5pbWF0aW9uLWRlbGF5Oi4yczthbmltYXRpb24tZGVsYXk6LjJzfS5ocGxheWVyLWJlemVsIC5kaXBsYXllci1sb2FkaW5nLWljb24gLmRpcGxheWVyLWxvYWRpbmctZG90LmRpcGxheWVyLWxvYWRpbmctZG90LTF7LXdlYmtpdC1hbmltYXRpb24tZGVsYXk6LjFzO2FuaW1hdGlvbi1kZWxheTouMXN9QC13ZWJraXQta2V5ZnJhbWVzIGRpcGxheWVyLWxvYWRpbmctZG90LWZhZGV7MCV7b3BhY2l0eTouNzt0cmFuc2Zvcm06c2NhbGUoMS4yKX01MCV7b3BhY2l0eTouMjU7dHJhbnNmb3JtOnNjYWxlKC45KX10b3tvcGFjaXR5Oi4yNTt0cmFuc2Zvcm06c2NhbGUoLjg1KX19QGtleWZyYW1lcyBkaXBsYXllci1sb2FkaW5nLWRvdC1mYWRlezAle29wYWNpdHk6Ljc7dHJhbnNmb3JtOnNjYWxlKDEuMil9NTAle29wYWNpdHk6LjI1O3RyYW5zZm9ybTpzY2FsZSguOSl9dG97b3BhY2l0eTouMjU7dHJhbnNmb3JtOnNjYWxlKC44NSl9fS5ocGxheWVyLWNvbnRyb2xsZXItbWFza3tiYWNrZ3JvdW5kOnVybChkYXRhOmltYWdlL3BuZztiYXNlNjQsaVZCT1J3MEtHZ29BQUFBTlNVaEVVZ0FBQUFFQUFBREdDQVlBQUFBVCtPcUZBQUFBZGtsRVFWUW96NDJRUVE3QUlBZ0VGL1QvRCtrYnEvUldBbG5ReXlhekE0YW9BQjRGc0JTQS9iRmp1RjFFT0w3VmJySXJCdXVzbXJ0NFpaT1JmYjZlaGJXZG5SSEVJaUlUYUVVS2E1RUpxVWFrUlNhRVlCSlNDWTJkRXN0UVk3QXV4YWh3WEZydlptV2wycmg0SlowN3o5ZEx0ZXNmTmo1cTBGVTNBNU9iYndBQUFBQkpSVTVFcmtKZ2dnPT0pIHJlcGVhdC14IGJvdHRvbTtoZWlnaHQ6OThweDt3aWR0aDoxMDAlfS5ocGxheWVyLWNvbnRyb2xsZXIsLmhwbGF5ZXItY29udHJvbGxlci1tYXNre3Bvc2l0aW9uOmFic29sdXRlO2JvdHRvbTowO3RyYW5zaXRpb246YWxsIC4zcyBlYXNlO3RyYW5zZm9ybTp0cmFuc2xhdGVaKDApfS5ocGxheWVyLWNvbnRyb2xsZXJ7bGVmdDowO3JpZ2h0OjA7aGVpZ2h0OjQxcHg7cGFkZGluZzowIDEwcHg7LXdlYmtpdC11c2VyLXNlbGVjdDpub25lOy1tb3otdXNlci1zZWxlY3Q6bm9uZTstbXMtdXNlci1zZWxlY3Q6bm9uZTt1c2VyLXNlbGVjdDpub25lO2Rpc3BsYXk6ZmxleDthbGlnbi1pdGVtczpjZW50ZXI7anVzdGlmeS1jb250ZW50OmNlbnRlcn0uaHBsYXllci1jb250cm9sbGVyLmhwbGF5ZXItY29udHJvbGxlci1jb21tZW50IC5ocGxheWVyLWljb25ze2Rpc3BsYXk6bm9uZX0uaHBsYXllci1jb250cm9sbGVyLmhwbGF5ZXItY29udHJvbGxlci1jb21tZW50IC5ocGxheWVyLWljb25zLmhwbGF5ZXItY29tbWVudC1ib3h7ZGlzcGxheTpibG9ja30uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWJhci13cmFwe2N1cnNvcjpwb2ludGVyO2ZsZXg6MTtoZWlnaHQ6M3B4O2JvcmRlci1yYWRpdXM6MnB4O3BhZGRpbmc6MCAxMHB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItYmFyLXdyYXAgLmhwbGF5ZXItaGlnaGxpZ2h0e3otaW5kZXg6MTI7cG9zaXRpb246YWJzb2x1dGU7dG9wOjVweDt3aWR0aDo2cHg7aGVpZ2h0OjIwJTtib3JkZXItcmFkaXVzOjZweDtiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7dGV4dC1hbGlnbjpjZW50ZXI7dHJhbnNmb3JtOnRyYW5zbGF0ZVgoLTNweCk7dHJhbnNpdGlvbjphbGwgLjJzIGVhc2UtaW4tb3V0O2Rpc3BsYXk6YmxvY2s7d2lkdGg6OHB4O3RyYW5zZm9ybTp0cmFuc2xhdGVYKC00cHgpO3RvcDo0cHg7aGVpZ2h0OjQwJX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWJhci13cmFwIC5ocGxheWVyLWhpZ2hsaWdodDpob3ZlciAuaHBsYXllci1oaWdobGlnaHQtdGV4dHtkaXNwbGF5OmJsb2NrfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItYmFyLXdyYXAgLmhwbGF5ZXItaGlnaGxpZ2h0OmhvdmVyfi5ocGxheWVyLWJhci1wcmV2aWV3LC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItYmFyLXdyYXAgLmhwbGF5ZXItaGlnaGxpZ2h0OmhvdmVyfi5ocGxheWVyLWJhci10aW1le29wYWNpdHk6MH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWJhci13cmFwIC5ocGxheWVyLWhpZ2hsaWdodCAuaHBsYXllci1oaWdobGlnaHQtdGV4dHtkaXNwbGF5Om5vbmU7cG9zaXRpb246YWJzb2x1dGU7bGVmdDo1MCU7dG9wOi0yNHB4O3BhZGRpbmc6NXB4IDhweDtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMCwwLDAsLjYyKTtjb2xvcjojZmZmO2JvcmRlci1yYWRpdXM6NHB4O2ZvbnQtc2l6ZToxMnB4O3doaXRlLXNwYWNlOm5vd3JhcDt0cmFuc2Zvcm06dHJhbnNsYXRlWCgtNTAlKX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWJhci13cmFwIC5ocGxheWVyLWJhci1wcmV2aWV3e3Bvc2l0aW9uOmFic29sdXRlO2JhY2tncm91bmQ6I2ZmZjtwb2ludGVyLWV2ZW50czpub25lO2Rpc3BsYXk6bm9uZTtiYWNrZ3JvdW5kLXNpemU6MTYwMDBweCAxMDAlO2JvcmRlci1yYWRpdXM6MnB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItYmFyLXdyYXAgLmhwbGF5ZXItYmFyLXByZXZpZXctY2FudmFze3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjEwMCU7aGVpZ2h0OjEwMCU7ei1pbmRleDoxO3BvaW50ZXItZXZlbnRzOm5vbmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1iYXItd3JhcCAuaHBsYXllci1iYXJ7cG9zaXRpb246cmVsYXRpdmU7aGVpZ2h0OjNweDt3aWR0aDoxMDAlO2JhY2tncm91bmQ6aHNsYSgwLDAlLDEwMCUsLjMpO2N1cnNvcjpwb2ludGVyO2JvcmRlci1yYWRpdXM6MnB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItYmFyLXdyYXAgLmhwbGF5ZXItYmFyIC5ocGxheWVyLWxvYWRlZHtwb3NpdGlvbjphYnNvbHV0ZTtsZWZ0OjA7dG9wOjA7Ym90dG9tOjA7YmFja2dyb3VuZDpoc2xhKDAsMCUsMTAwJSwuNCk7aGVpZ2h0OjNweDt0cmFuc2l0aW9uOmFsbCAuNXMgZWFzZTt3aWxsLWNoYW5nZTp3aWR0aDtib3JkZXItcmFkaXVzOjJweH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWJhci13cmFwIC5ocGxheWVyLWJhciAuaHBsYXllci1wbGF5ZWR7cG9zaXRpb246YWJzb2x1dGU7bGVmdDowO3RvcDowO2JvdHRvbTowO2hlaWdodDozcHg7d2lsbC1jaGFuZ2U6d2lkdGg7Ym9yZGVyLXJhZGl1czoycHg7YmFja2dyb3VuZDpyZ2JhKDI1NSw2NSw2NSwuNyl9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1iYXItd3JhcCAuaHBsYXllci1iYXIgLmhwbGF5ZXItcGxheWVkIC5ocGxheWVyLXRodW1ie3Bvc2l0aW9uOmFic29sdXRlO3RvcDowO3JpZ2h0OjVweDttYXJnaW4tdG9wOi00cHg7bWFyZ2luLXJpZ2h0Oi0xMHB4O2hlaWdodDoxMXB4O3dpZHRoOjExcHg7Ym9yZGVyLXJhZGl1czo1MCU7Y3Vyc29yOnBvaW50ZXI7dHJhbnNpdGlvbjphbGwgLjNzIGVhc2UtaW4tb3V0O3RyYW5zZm9ybTpzY2FsZSgxKTtiYWNrZ3JvdW5kOiNmZmZ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1hbGwtdGltZXtoZWlnaHQ6MzhweDtsaW5lLWhlaWdodDozOHB4O2NvbG9yOiNmZmY7Zm9udC1zaXplOjEzcHg7dGV4dC1zaGFkb3c6MCAwIDEwcHggcmdiYSgwLDAsMCwuMyk7Zm9udC13ZWlnaHQ6NDAwO21hcmdpbi1yaWdodDozcHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94e2Rpc3BsYXk6bm9uZTtwb3NpdGlvbjphYnNvbHV0ZTt0cmFuc2l0aW9uOmFsbCAuM3MgZWFzZS1pbi1vdXQ7ei1pbmRleDoyO2hlaWdodDozOHB4O2JvdHRvbTowO2xlZnQ6MjBweDtyaWdodDoyMHB4O2NvbG9yOiNmZmZ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWljb257cGFkZGluZzo3cHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1pY29ue3Bvc2l0aW9uOmFic29sdXRlO2xlZnQ6MDt0b3A6MH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zLmhwbGF5ZXItY29tbWVudC1ib3ggLmhwbGF5ZXItc2VuZC1pY29ue3Bvc2l0aW9uOmFic29sdXRlO3JpZ2h0OjA7dG9wOjB9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3h7cG9zaXRpb246YWJzb2x1dGU7YmFja2dyb3VuZDpyZ2JhKDI4LDI4LDI4LC45KTtib3R0b206NDFweDtsZWZ0OjA7Ym94LXNoYWRvdzowIDAgMjVweCByZ2JhKDAsMCwwLC4zKTtib3JkZXItcmFkaXVzOjRweDtwYWRkaW5nOjEwcHggMTBweCAxNnB4O2ZvbnQtc2l6ZToxNHB4O3dpZHRoOjIwNHB4O3RyYW5zaXRpb246YWxsIC4zcyBlYXNlLWluLW91dDt0cmFuc2Zvcm06c2NhbGUoMCl9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3guaHBsYXllci1jb21tZW50LXNldHRpbmctb3Blbnt0cmFuc2Zvcm06c2NhbGUoMSl9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggaW5wdXRbdHlwZT1yYWRpb117ZGlzcGxheTpub25lfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMuaHBsYXllci1jb21tZW50LWJveCAuaHBsYXllci1jb21tZW50LXNldHRpbmctYm94IGxhYmVse2N1cnNvcjpwb2ludGVyfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMuaHBsYXllci1jb21tZW50LWJveCAuaHBsYXllci1jb21tZW50LXNldHRpbmctYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy10aXRsZXtmb250LXNpemU6MTNweDtjb2xvcjojZmZmO2xpbmUtaGVpZ2h0OjMwcHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLXR5cGV7Zm9udC1zaXplOjB9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLXR5cGUgLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLXRpdGxle21hcmdpbi1ib3R0b206NnB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMuaHBsYXllci1jb21tZW50LWJveCAuaHBsYXllci1jb21tZW50LXNldHRpbmctYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy10eXBlIGxhYmVsOm50aC1jaGlsZCgyKSBzcGFue2JvcmRlci1yYWRpdXM6NHB4IDAgMCA0cHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLXR5cGUgbGFiZWw6bnRoLWNoaWxkKDQpIHNwYW57Ym9yZGVyLXJhZGl1czowIDRweCA0cHggMH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zLmhwbGF5ZXItY29tbWVudC1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLWJveCAuaHBsYXllci1jb21tZW50LXNldHRpbmctdHlwZSBzcGFue3dpZHRoOjMzJTtwYWRkaW5nOjRweCA2cHg7bGluZS1oZWlnaHQ6MTZweDtkaXNwbGF5OmlubGluZS1ibG9jaztmb250LXNpemU6MTJweDtjb2xvcjojZmZmO2JvcmRlcjoxcHggc29saWQgI2ZmZjttYXJnaW4tcmlnaHQ6LTFweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7dGV4dC1hbGlnbjpjZW50ZXI7Y3Vyc29yOnBvaW50ZXJ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLXR5cGUgaW5wdXQ6Y2hlY2tlZCtzcGFue2JhY2tncm91bmQ6I2U0ZTRlNjtjb2xvcjojMWMxYzFjfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMuaHBsYXllci1jb21tZW50LWJveCAuaHBsYXllci1jb21tZW50LXNldHRpbmctYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1jb2xvcntmb250LXNpemU6MH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zLmhwbGF5ZXItY29tbWVudC1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLWJveCAuaHBsYXllci1jb21tZW50LXNldHRpbmctY29sb3IgbGFiZWx7Zm9udC1zaXplOjA7cGFkZGluZzo2cHg7ZGlzcGxheTppbmxpbmUtYmxvY2t9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLWNvbG9yIHNwYW57d2lkdGg6MjJweDtoZWlnaHQ6MjJweDtkaXNwbGF5OmlubGluZS1ibG9jaztib3JkZXItcmFkaXVzOjUwJTtib3gtc2l6aW5nOmJvcmRlci1ib3g7Y3Vyc29yOnBvaW50ZXJ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtc2V0dGluZy1ib3ggLmhwbGF5ZXItY29tbWVudC1zZXR0aW5nLWNvbG9yIHNwYW46aG92ZXJ7LXdlYmtpdC1hbmltYXRpb246bXktZmFjZSA1cyBlYXNlLWluLW91dCBpbmZpbml0ZTthbmltYXRpb246bXktZmFjZSA1cyBlYXNlLWluLW91dCBpbmZpbml0ZX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zLmhwbGF5ZXItY29tbWVudC1ib3ggLmhwbGF5ZXItY29tbWVudC1pbnB1dHtvdXRsaW5lOm5vbmU7Ym9yZGVyOm5vbmU7cGFkZGluZzo4cHggMzFweDtmb250LXNpemU6MTRweDtsaW5lLWhlaWdodDoxOHB4O3RleHQtYWxpZ246Y2VudGVyO2JvcmRlci1yYWRpdXM6NHB4O2JhY2tncm91bmQ6bm9uZTttYXJnaW46MDtoZWlnaHQ6MTAwJTtib3gtc2l6aW5nOmJvcmRlci1ib3g7d2lkdGg6MTAwJTtjb2xvcjojZmZmfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMuaHBsYXllci1jb21tZW50LWJveCAuaHBsYXllci1jb21tZW50LWlucHV0OjotbW96LXBsYWNlaG9sZGVye2NvbG9yOiNmZmY7b3BhY2l0eTouOH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zLmhwbGF5ZXItY29tbWVudC1ib3ggLmhwbGF5ZXItY29tbWVudC1pbnB1dDotbXMtaW5wdXQtcGxhY2Vob2xkZXJ7Y29sb3I6I2ZmZjtvcGFjaXR5Oi44fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMuaHBsYXllci1jb21tZW50LWJveCAuaHBsYXllci1jb21tZW50LWlucHV0OjpwbGFjZWhvbGRlcntjb2xvcjojZmZmO29wYWNpdHk6Ljh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWNvbW1lbnQtYm94IC5ocGxheWVyLWNvbW1lbnQtaW5wdXQ6Oi1tcy1jbGVhcntkaXNwbGF5Om5vbmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucy5ocGxheWVyLWljb25zLWxlZnR7ZGlzcGxheTpmbGV4O2FsaWduLWl0ZW1zOmNlbnRlcn0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zLmhwbGF5ZXItaWNvbnMtcmlnaHR7cmlnaHQ6NXB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItbGl2ZS1iYWRzZ2UsLmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci10aW1le2xpbmUtaGVpZ2h0OjM4cHg7Y29sb3I6I2VlZTt0ZXh0LXNoYWRvdzowIDAgMnB4IHJnYmEoMCwwLDAsLjUpO3ZlcnRpY2FsLWFsaWduOm1pZGRsZTtmb250LXNpemU6MTNweDtjdXJzb3I6ZGVmYXVsdH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLWxpdmUtZG90e2Rpc3BsYXk6aW5saW5lLWJsb2NrO3dpZHRoOjZweDtoZWlnaHQ6NnB4O3ZlcnRpY2FsLWFsaWduOjQlO21hcmdpbi1yaWdodDo1cHg7Y29udGVudDpcIlwiO2JvcmRlci1yYWRpdXM6NnB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItaWNvbnt3aWR0aDoyN3B4O2hlaWdodDoyN3B4O3BhZGRpbmc6NXB4O2JvcmRlcjpub25lO2JhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnQ7b3V0bGluZTpub25lO2N1cnNvcjpwb2ludGVyO3ZlcnRpY2FsLWFsaWduOm1pZGRsZTtib3gtc2l6aW5nOmJvcmRlci1ib3g7ZGlzcGxheTppbmxpbmUtYmxvY2s7Zm9udC1zaXplOjB9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1pY29uIC5ocGxheWVyLWljb24tY29udGVudHt0cmFuc2l0aW9uOmFsbCAuMnMgZWFzZS1pbi1vdXQ7b3BhY2l0eTouOH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLWljb246aG92ZXIgLmhwbGF5ZXItaWNvbi1jb250ZW50e29wYWNpdHk6MX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLWljb24uaHBsYXllci1xdWFsaXR5LWljb257Y29sb3I6I2ZmZjt3aWR0aDphdXRvO2xpbmUtaGVpZ2h0OjIycHg7Zm9udC1zaXplOjE0cHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1pY29uLmhwbGF5ZXItY29tbWVudC1pY29ue3BhZGRpbmc6MTBweCA5cHggOXB4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItaWNvbi5ocGxheWVyLXNldHRpbmctaWNvbntwYWRkaW5nLXRvcDo4LjVweH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLWljb24uaHBsYXllci12b2x1bWUtaWNvbnt3aWR0aDoyN3B4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdm9sdW1le3Bvc2l0aW9uOnJlbGF0aXZlO2ZvbnQtc2l6ZTowO2hlaWdodDoxMDAlO3BhZGRpbmctcmlnaHQ6M3B4fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdm9sdW1lOmhvdmVyIC5ocGxheWVyLXZvbHVtZS1iYXItd3JhcCAuaHBsYXllci12b2x1bWUtYmFye3dpZHRoOjQ1cHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci12b2x1bWU6aG92ZXIgLmhwbGF5ZXItdm9sdW1lLWJhci13cmFwIC5ocGxheWVyLXZvbHVtZS1iYXIgLmhwbGF5ZXItdm9sdW1lLWJhci1pbm5lciAuaHBsYXllci10aHVtYnt0cmFuc2Zvcm06c2NhbGUoMSl9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci12b2x1bWUuaHBsYXllci12b2x1bWUtYWN0aXZlIC5ocGxheWVyLXZvbHVtZS1iYXItd3JhcCAuaHBsYXllci12b2x1bWUtYmFye3dpZHRoOjQ1cHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci12b2x1bWUuaHBsYXllci12b2x1bWUtYWN0aXZlIC5ocGxheWVyLXZvbHVtZS1iYXItd3JhcCAuaHBsYXllci12b2x1bWUtYmFyIC5ocGxheWVyLXZvbHVtZS1iYXItaW5uZXIgLmhwbGF5ZXItdGh1bWJ7dHJhbnNmb3JtOnNjYWxlKDEpfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdm9sdW1lIC5ocGxheWVyLXZvbHVtZS1iYXItd3JhcHtkaXNwbGF5OmlubGluZS1ibG9jazttYXJnaW46MCAxMHB4IDAgLTVweDt2ZXJ0aWNhbC1hbGlnbjptaWRkbGU7aGVpZ2h0OjEwMCV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci12b2x1bWUgLmhwbGF5ZXItdm9sdW1lLWJhci13cmFwIC5ocGxheWVyLXZvbHVtZS1iYXJ7cG9zaXRpb246cmVsYXRpdmU7dG9wOjE3cHg7d2lkdGg6MDtoZWlnaHQ6M3B4O2JhY2tncm91bmQ6I2FhYTt0cmFuc2l0aW9uOmFsbCAuM3MgZWFzZS1pbi1vdXR9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci12b2x1bWUgLmhwbGF5ZXItdm9sdW1lLWJhci13cmFwIC5ocGxheWVyLXZvbHVtZS1iYXIgLmhwbGF5ZXItdm9sdW1lLWJhci1pbm5lcntwb3NpdGlvbjphYnNvbHV0ZTtib3R0b206MDtsZWZ0OjA7aGVpZ2h0OjEwMCU7dHJhbnNpdGlvbjphbGwgLjFzIGVhc2U7d2lsbC1jaGFuZ2U6d2lkdGh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci12b2x1bWUgLmhwbGF5ZXItdm9sdW1lLWJhci13cmFwIC5ocGxheWVyLXZvbHVtZS1iYXIgLmhwbGF5ZXItdm9sdW1lLWJhci1pbm5lciAuaHBsYXllci10aHVtYntwb3NpdGlvbjphYnNvbHV0ZTt0b3A6MDtyaWdodDo1cHg7bWFyZ2luLXRvcDotNHB4O21hcmdpbi1yaWdodDotMTBweDtoZWlnaHQ6MTFweDt3aWR0aDoxMXB4O2JvcmRlci1yYWRpdXM6NTAlO2N1cnNvcjpwb2ludGVyO3RyYW5zaXRpb246YWxsIC4zcyBlYXNlLWluLW91dDt0cmFuc2Zvcm06c2NhbGUoMSl9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nLC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc3VidGl0bGUtYnRue2Rpc3BsYXk6aW5saW5lLWJsb2NrO2hlaWdodDoxMDAlfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWJveHtwb3NpdGlvbjphYnNvbHV0ZTtyaWdodDowO2JvdHRvbTo1MHB4O3RyYW5zZm9ybTpzY2FsZSgwKTt3aWR0aDoxNTBweDtib3JkZXItcmFkaXVzOjJweDtiYWNrZ3JvdW5kOnJnYmEoMjgsMjgsMjgsLjkpO3BhZGRpbmc6N3B4IDA7dHJhbnNpdGlvbjphbGwgLjNzIGVhc2UtaW4tb3V0O292ZXJmbG93OmhpZGRlbjt6LWluZGV4OjJ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctYm94PmRpdntkaXNwbGF5Om5vbmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctYm94PmRpdi5ocGxheWVyLXNldHRpbmctb3JpZ2luLXBhbmVse2Rpc3BsYXk6YmxvY2t9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctYm94LmhwbGF5ZXItc2V0dGluZy1ib3gtb3Blbnt0cmFuc2Zvcm06c2NhbGUoMSl9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctYm94LmhwbGF5ZXItc2V0dGluZy1ib3gtbmFycm93e3dpZHRoOjcwcHg7dGV4dC1hbGlnbjpjZW50ZXJ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctYm94LmhwbGF5ZXItc2V0dGluZy1ib3gtc3BlZWQgLmhwbGF5ZXItc2V0dGluZy1vcmlnaW4tcGFuZWx7ZGlzcGxheTpub25lfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWJveC5ocGxheWVyLXNldHRpbmctYm94LXNwZWVkIC5ocGxheWVyLXNldHRpbmctc3BlZWQtcGFuZWx7ZGlzcGxheTpibG9ja30uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXNldHRpbmcgLmhwbGF5ZXItc2V0dGluZy1pdGVtLC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLXNwZWVkLWl0ZW17aGVpZ2h0OjMwcHg7cGFkZGluZzo1cHggMTBweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7Y3Vyc29yOnBvaW50ZXI7cG9zaXRpb246cmVsYXRpdmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctaXRlbTpob3ZlciwuaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXNldHRpbmcgLmhwbGF5ZXItc2V0dGluZy1zcGVlZC1pdGVtOmhvdmVye2JhY2tncm91bmQtY29sb3I6aHNsYSgwLDAlLDEwMCUsLjEpfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWRhbm1ha3V7cGFkZGluZzo1cHggMH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXNldHRpbmcgLmhwbGF5ZXItc2V0dGluZy1kYW5tYWt1IC5ocGxheWVyLWxhYmVse3BhZGRpbmc6MCAxMHB4O2Rpc3BsYXk6aW5saW5lfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWRhbm1ha3U6aG92ZXIgLmhwbGF5ZXItbGFiZWx7ZGlzcGxheTpub25lfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWRhbm1ha3U6aG92ZXIgLmhwbGF5ZXItZGFubWFrdS1iYXItd3JhcHtkaXNwbGF5OmlubGluZS1ibG9ja30uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXNldHRpbmcgLmhwbGF5ZXItc2V0dGluZy1kYW5tYWt1LmhwbGF5ZXItc2V0dGluZy1kYW5tYWt1LWFjdGl2ZSAuaHBsYXllci1sYWJlbHtkaXNwbGF5Om5vbmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1zZXR0aW5nIC5ocGxheWVyLXNldHRpbmctZGFubWFrdS5ocGxheWVyLXNldHRpbmctZGFubWFrdS1hY3RpdmUgLmhwbGF5ZXItZGFubWFrdS1iYXItd3JhcHtkaXNwbGF5OmlubGluZS1ibG9ja30uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXNldHRpbmcgLmhwbGF5ZXItc2V0dGluZy1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtYmFyLXdyYXB7cGFkZGluZzowIDEwcHg7Ym94LXNpemluZzpib3JkZXItYm94O2Rpc3BsYXk6bm9uZTt2ZXJ0aWNhbC1hbGlnbjptaWRkbGU7aGVpZ2h0OjEwMCU7d2lkdGg6MTAwJX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXNldHRpbmcgLmhwbGF5ZXItc2V0dGluZy1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtYmFyLXdyYXAgLmhwbGF5ZXItZGFubWFrdS1iYXJ7cG9zaXRpb246cmVsYXRpdmU7dG9wOjguNXB4O3dpZHRoOjEwMCU7aGVpZ2h0OjNweDtiYWNrZ3JvdW5kOiNmZmY7dHJhbnNpdGlvbjphbGwgLjNzIGVhc2UtaW4tb3V0fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWRhbm1ha3UgLmhwbGF5ZXItZGFubWFrdS1iYXItd3JhcCAuaHBsYXllci1kYW5tYWt1LWJhciAuaHBsYXllci1kYW5tYWt1LWJhci1pbm5lcntwb3NpdGlvbjphYnNvbHV0ZTtib3R0b206MDtsZWZ0OjA7aGVpZ2h0OjEwMCU7dHJhbnNpdGlvbjphbGwgLjFzIGVhc2U7YmFja2dyb3VuZDojYWFhO3dpbGwtY2hhbmdlOndpZHRofS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItc2V0dGluZyAuaHBsYXllci1zZXR0aW5nLWRhbm1ha3UgLmhwbGF5ZXItZGFubWFrdS1iYXItd3JhcCAuaHBsYXllci1kYW5tYWt1LWJhciAuaHBsYXllci1kYW5tYWt1LWJhci1pbm5lciAuaHBsYXllci10aHVtYntwb3NpdGlvbjphYnNvbHV0ZTt0b3A6MDtyaWdodDo1cHg7bWFyZ2luLXRvcDotNHB4O21hcmdpbi1yaWdodDotMTBweDtoZWlnaHQ6MTFweDt3aWR0aDoxMXB4O2JvcmRlci1yYWRpdXM6NTAlO2N1cnNvcjpwb2ludGVyO3RyYW5zaXRpb246YWxsIC4zcyBlYXNlLWluLW91dDtiYWNrZ3JvdW5kOiNhYWF9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1mdWxse2hlaWdodDoxMDAlO2ZvbnQtc2l6ZTowO3BhZGRpbmctbGVmdDozcHg7cG9zaXRpb246cmVsYXRpdmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1mdWxsOmhvdmVyIC5ocGxheWVyLWZ1bGwtaW4taWNvbntkaXNwbGF5OmJsb2NrfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItZnVsbCAuaHBsYXllci1mdWxsLWluLWljb257cG9zaXRpb246YWJzb2x1dGU7dG9wOi0zMHB4O3otaW5kZXg6MTtkaXNwbGF5Om5vbmV9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1xdWFsaXR5e3Bvc2l0aW9uOnJlbGF0aXZlO2Rpc3BsYXk6aW5saW5lLWJsb2NrO2hlaWdodDoxMDAlO3otaW5kZXg6Mn0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXF1YWxpdHk6aG92ZXIgLmhwbGF5ZXItcXVhbGl0eS1saXN0LC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItcXVhbGl0eTpob3ZlciAuaHBsYXllci1xdWFsaXR5LW1hc2t7ZGlzcGxheTpibG9ja30uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXF1YWxpdHkgLmhwbGF5ZXItcXVhbGl0eS1tYXNre2Rpc3BsYXk6bm9uZTtwb3NpdGlvbjphYnNvbHV0ZTtib3R0b206MzhweDtsZWZ0Oi0xOHB4O3dpZHRoOjgwcHg7cGFkZGluZy1ib3R0b206MTJweH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXF1YWxpdHkgLmhwbGF5ZXItcXVhbGl0eS1saXN0e2Rpc3BsYXk6bm9uZTtmb250LXNpemU6MTJweDt3aWR0aDo4MHB4O2JvcmRlci1yYWRpdXM6MnB4O2JhY2tncm91bmQ6cmdiYSgyOCwyOCwyOCwuOSk7cGFkZGluZzo1cHggMDt0cmFuc2l0aW9uOmFsbCAuM3MgZWFzZS1pbi1vdXQ7b3ZlcmZsb3c6aGlkZGVuO2NvbG9yOiNmZmY7dGV4dC1hbGlnbjpjZW50ZXJ9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci1xdWFsaXR5IC5ocGxheWVyLXF1YWxpdHktaXRlbXtoZWlnaHQ6MjVweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7Y3Vyc29yOnBvaW50ZXI7bGluZS1oZWlnaHQ6MjVweH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXF1YWxpdHkgLmhwbGF5ZXItcXVhbGl0eS1pdGVtOmhvdmVye2JhY2tncm91bmQtY29sb3I6aHNsYSgwLDAlLDEwMCUsLjEpfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItY29tbWVudHtkaXNwbGF5OmlubGluZS1ibG9jaztoZWlnaHQ6MTAwJX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLWxhYmVse2NvbG9yOiNlZWU7Zm9udC1zaXplOjEzcHg7ZGlzcGxheTppbmxpbmUtYmxvY2s7dmVydGljYWwtYWxpZ246bWlkZGxlO3doaXRlLXNwYWNlOm5vd3JhcH0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXRvZ2dsZXt3aWR0aDozMnB4O2hlaWdodDoyMHB4O3RleHQtYWxpZ246Y2VudGVyO2ZvbnQtc2l6ZTowO3ZlcnRpY2FsLWFsaWduOm1pZGRsZTtwb3NpdGlvbjphYnNvbHV0ZTt0b3A6NXB4O3JpZ2h0OjEwcHh9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci10b2dnbGUgaW5wdXR7bWF4LWhlaWdodDowO21heC13aWR0aDowO2Rpc3BsYXk6bm9uZX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXRvZ2dsZSBpbnB1dCtsYWJlbHtkaXNwbGF5OmlubGluZS1ibG9jaztwb3NpdGlvbjpyZWxhdGl2ZTtib3gtc2hhZG93Omluc2V0IDAgMCAwIDAgI2RmZGZkZjtib3JkZXI6MXB4IHNvbGlkICNkZmRmZGY7aGVpZ2h0OjIwcHg7d2lkdGg6MzJweDtib3JkZXItcmFkaXVzOjEwcHg7Ym94LXNpemluZzpib3JkZXItYm94O2N1cnNvcjpwb2ludGVyO3RyYW5zaXRpb246LjJzIGVhc2UtaW4tb3V0fS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdG9nZ2xlIGlucHV0K2xhYmVsOmFmdGVyLC5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdG9nZ2xlIGlucHV0K2xhYmVsOmJlZm9yZXtjb250ZW50OlwiXCI7cG9zaXRpb246YWJzb2x1dGU7ZGlzcGxheTpibG9jaztoZWlnaHQ6MThweDt3aWR0aDoxOHB4O3RvcDowO2xlZnQ6MDtib3JkZXItcmFkaXVzOjE1cHg7dHJhbnNpdGlvbjouMnMgZWFzZS1pbi1vdXR9LmhwbGF5ZXItY29udHJvbGxlciAuaHBsYXllci1pY29ucyAuaHBsYXllci10b2dnbGUgaW5wdXQrbGFiZWw6YWZ0ZXJ7YmFja2dyb3VuZDojZmZmO2JveC1zaGFkb3c6MCAxcHggM3B4IHJnYmEoMCwwLDAsLjQpfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdG9nZ2xlIGlucHV0OmNoZWNrZWQrbGFiZWx7Ym9yZGVyLWNvbG9yOmhzbGEoMCwwJSwxMDAlLC41KX0uaHBsYXllci1jb250cm9sbGVyIC5ocGxheWVyLWljb25zIC5ocGxheWVyLXRvZ2dsZSBpbnB1dDpjaGVja2VkK2xhYmVsOmJlZm9yZXt3aWR0aDozMHB4O2JhY2tncm91bmQ6aHNsYSgwLDAlLDEwMCUsLjUpfS5ocGxheWVyLWNvbnRyb2xsZXIgLmhwbGF5ZXItaWNvbnMgLmhwbGF5ZXItdG9nZ2xlIGlucHV0OmNoZWNrZWQrbGFiZWw6YWZ0ZXJ7bGVmdDoxMnB4fS5ocGxheWVyLW1vYmlsZS1wbGF5e2Rpc3BsYXk6bm9uZX0uaHBsYXllci1tb2JpbGUtcGxheSAuZGVwbGF5ZXItcGxheS1pY29ue29wYWNpdHk6Ljg7b3BhY2l0eToxfS5ocGxheWVyLW1vYmlsZS1wbGF5IC5kZXBsYXllci1wYXVzZS1pY29uLC5ocGxheWVyLW1vYmlsZS1wbGF5IC5kZXBsYXllci1wbGF5LWljb257d2lkdGg6NTBweDtoZWlnaHQ6NTBweDtib3JkZXI6bm9uZTtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O291dGxpbmU6bm9uZTtib3gtc2l6aW5nOmJvcmRlci1ib3g7Ym90dG9tOjA7cG9zaXRpb246YWJzb2x1dGU7bGVmdDo1MCU7dG9wOjUwJTt0cmFuc2Zvcm06dHJhbnNsYXRlKC01MCUsLTUwJSkgdHJhbnNsYXRlWigwKX0uaHBsYXllci1tb2JpbGUtcGxheSAuZGVwbGF5ZXItcGF1c2UtaWNvbntvcGFjaXR5Oi44O29wYWNpdHk6MH0uaHBsYXllci1tb2JpbGUtcGxheS5ocGxheWVyLW1vYmlsZS1wYXVzZS1zaG93IC5kZXBsYXllci1wbGF5LWljb257b3BhY2l0eTowfS5ocGxheWVyLW1vYmlsZS1wbGF5LmhwbGF5ZXItbW9iaWxlLWFjdGlvbi1wbGF5IC5kZXBsYXllci1wbGF5LWljb24sLmhwbGF5ZXItbW9iaWxlLXBsYXkuaHBsYXllci1tb2JpbGUtcGF1c2Utc2hvdyAuZGVwbGF5ZXItcGF1c2UtaWNvbntvcGFjaXR5OjF9LmhwbGF5ZXItbW9iaWxlLXBsYXkuaHBsYXllci1tb2JpbGUtYWN0aW9uLXBhdXNlIC5kZXBsYXllci1wbGF5LWljb24sLmhwbGF5ZXItbW9iaWxlLXBsYXkuaHBsYXllci1tb2JpbGUtYWN0aW9uLXBsYXkgLmRlcGxheWVyLXBhdXNlLWljb257b3BhY2l0eTowfS5ocGxheWVyLW1vYmlsZS1wbGF5LmhwbGF5ZXItbW9iaWxlLWFjdGlvbi1wYXVzZSAuZGVwbGF5ZXItcGF1c2UtaWNvbntvcGFjaXR5OjF9LmhwbGF5ZXItZGFubWFrdXtwb3NpdGlvbjphYnNvbHV0ZTtsZWZ0OjA7cmlnaHQ6MDt0b3A6MDtib3R0b206MDtmb250LXNpemU6MjJweDtjb2xvcjojZmZmfS5ocGxheWVyLWRhbm1ha3UgLmhwbGF5ZXItZGFubWFrdS1pdGVte2Rpc3BsYXk6aW5saW5lLWJsb2NrO3BvaW50ZXItZXZlbnRzOm5vbmU7LXdlYmtpdC11c2VyLXNlbGVjdDpub25lOy1tb3otdXNlci1zZWxlY3Q6bm9uZTstbXMtdXNlci1zZWxlY3Q6bm9uZTt1c2VyLXNlbGVjdDpub25lO2N1cnNvcjpkZWZhdWx0O3doaXRlLXNwYWNlOm5vd3JhcDt0ZXh0LXNoYWRvdzouNXB4IC41cHggLjVweCByZ2JhKDAsMCwwLC41KX0uaHBsYXllci1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtaXRlbS0tZGVtb3twb3NpdGlvbjphYnNvbHV0ZTt2aXNpYmlsaXR5OmhpZGRlbn0uaHBsYXllci1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtcmlnaHR7cG9zaXRpb246YWJzb2x1dGU7cmlnaHQ6MDt0cmFuc2Zvcm06dHJhbnNsYXRlWCgxMDAlKX0uaHBsYXllci1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtcmlnaHQuaHBsYXllci1kYW5tYWt1LW1vdmV7d2lsbC1jaGFuZ2U6dHJhbnNmb3JtOy13ZWJraXQtYW5pbWF0aW9uOmRhbm1ha3UgNXMgbGluZWFyO2FuaW1hdGlvbjpkYW5tYWt1IDVzIGxpbmVhcjstd2Via2l0LWFuaW1hdGlvbi1wbGF5LXN0YXRlOnBhdXNlZDthbmltYXRpb24tcGxheS1zdGF0ZTpwYXVzZWR9QC13ZWJraXQta2V5ZnJhbWVzIGRhbm1ha3V7MCV7dHJhbnNmb3JtOnRyYW5zbGF0ZVgoMTAwJSl9fUBrZXlmcmFtZXMgZGFubWFrdXswJXt0cmFuc2Zvcm06dHJhbnNsYXRlWCgxMDAlKX19LmhwbGF5ZXItZGFubWFrdSAuaHBsYXllci1kYW5tYWt1LWJvdHRvbSwuaHBsYXllci1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtdG9we3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjEwMCU7dGV4dC1hbGlnbjpjZW50ZXI7dmlzaWJpbGl0eTpoaWRkZW59LmhwbGF5ZXItZGFubWFrdSAuaHBsYXllci1kYW5tYWt1LWJvdHRvbS5ocGxheWVyLWRhbm1ha3UtbW92ZSwuaHBsYXllci1kYW5tYWt1IC5ocGxheWVyLWRhbm1ha3UtdG9wLmhwbGF5ZXItZGFubWFrdS1tb3Zle3dpbGwtY2hhbmdlOnZpc2liaWxpdHk7LXdlYmtpdC1hbmltYXRpb246ZGFubWFrdS1jZW50ZXIgNHMgbGluZWFyO2FuaW1hdGlvbjpkYW5tYWt1LWNlbnRlciA0cyBsaW5lYXI7LXdlYmtpdC1hbmltYXRpb24tcGxheS1zdGF0ZTpwYXVzZWQ7YW5pbWF0aW9uLXBsYXktc3RhdGU6cGF1c2VkfUAtd2Via2l0LWtleWZyYW1lcyBkYW5tYWt1LWNlbnRlcnswJXt2aXNpYmlsaXR5OnZpc2libGV9dG97dmlzaWJpbGl0eTp2aXNpYmxlfX1Aa2V5ZnJhbWVzIGRhbm1ha3UtY2VudGVyezAle3Zpc2liaWxpdHk6dmlzaWJsZX10b3t2aXNpYmlsaXR5OnZpc2libGV9fS5ocGxheWVyLWxvZ297cG9pbnRlci1ldmVudHM6bm9uZTtwb3NpdGlvbjphYnNvbHV0ZTtsZWZ0OjIwcHg7dG9wOjIwcHg7bWF4LXdpZHRoOjUwcHg7bWF4LWhlaWdodDo1MHB4fS5ocGxheWVyLWxvZ28gaW1ne21heC13aWR0aDoxMDAlO21heC1oZWlnaHQ6MTAwJTtiYWNrZ3JvdW5kOm5vbmV9LmhwbGF5ZXItbWVudXtwb3NpdGlvbjphYnNvbHV0ZTt3aWR0aDoxNzBweDtib3JkZXItcmFkaXVzOjJweDtiYWNrZ3JvdW5kOnJnYmEoMjgsMjgsMjgsLjg1KTtwYWRkaW5nOjVweCAwO292ZXJmbG93OmhpZGRlbjt6LWluZGV4OjM7ZGlzcGxheTpub25lfS5ocGxheWVyLW1lbnUuaHBsYXllci1tZW51LXNob3d7ZGlzcGxheTpibG9ja30uaHBsYXllci1tZW51IC5ocGxheWVyLW1lbnUtaXRlbXtoZWlnaHQ6MzBweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7Y3Vyc29yOnBvaW50ZXJ9LmhwbGF5ZXItbWVudSAuaHBsYXllci1tZW51LWl0ZW06aG92ZXJ7YmFja2dyb3VuZC1jb2xvcjpoc2xhKDAsMCUsMTAwJSwuMSl9LmhwbGF5ZXItbWVudSAuaHBsYXllci1tZW51LWl0ZW0gYXtwYWRkaW5nOjAgMTBweDtsaW5lLWhlaWdodDozMHB4O2NvbG9yOiNlZWU7Zm9udC1zaXplOjEzcHg7ZGlzcGxheTppbmxpbmUtYmxvY2s7dmVydGljYWwtYWxpZ246bWlkZGxlO3dpZHRoOjEwMCU7Ym94LXNpemluZzpib3JkZXItYm94O3doaXRlLXNwYWNlOm5vd3JhcDt0ZXh0LW92ZXJmbG93OmVsbGlwc2lzO292ZXJmbG93OmhpZGRlbn0uaHBsYXllci1tZW51IC5ocGxheWVyLW1lbnUtaXRlbSBhOmhvdmVye3RleHQtZGVjb3JhdGlvbjpub25lfS5ocGxheWVyLW5vdGljZXtvcGFjaXR5OjA7cG9zaXRpb246YWJzb2x1dGU7Ym90dG9tOjQ4cHg7bGVmdDoxM3B4O2ZvbnQtc2l6ZToxNHB4O2JvcmRlci1yYWRpdXM6MjRweDtiYWNrZ3JvdW5kOnJnYmEoMTcsMTcsMTcsLjYpO3BhZGRpbmc6MTNweCAxN3B4O3RyYW5zaXRpb246YWxsIC4zcyBlYXNlLWluLW91dDtvdmVyZmxvdzpoaWRkZW47Y29sb3I6aHNsYSgwLDAlLDEwMCUsLjgpO3BvaW50ZXItZXZlbnRzOm5vbmU7dHJhbnNmb3JtOnRyYW5zbGF0ZVooMCl9LmhwbGF5ZXItc3VidGl0bGV7cG9zaXRpb246YWJzb2x1dGU7Ym90dG9tOjQwcHg7d2lkdGg6OTAlO2xlZnQ6NSU7dGV4dC1hbGlnbjpjZW50ZXI7Y29sb3I6I2ZmZjt0ZXh0LXNoYWRvdzouNXB4IC41cHggLjVweCByZ2JhKDAsMCwwLC41KTtmb250LXNpemU6MjBweH0uaHBsYXllci1zdWJ0aXRsZS5ocGxheWVyLXN1YnRpdGxlLWhpZGV7ZGlzcGxheTpub25lfXZpZGVvOjotd2Via2l0LW1lZGlhLWNvbnRyb2xzLWZ1bGxzY3JlZW4tYnV0dG9uLHZpZGVvOjotd2Via2l0LW1lZGlhLWNvbnRyb2xzLXBsYXktYnV0dG9ue2Rpc3BsYXk6bm9uZX12aWRlbzo6LXdlYmtpdC1tZWRpYS1jb250cm9scy1jdXJyZW50LXRpbWUtZGlzcGxheSx2aWRlbzo6LXdlYmtpdC1tZWRpYS1jb250cm9scy10aW1lbGluZXtkaXNwbGF5Om5vbmV9dmlkZW86Oi13ZWJraXQtbWVkaWEtY29udHJvbHMtbXV0ZS1idXR0b24sdmlkZW86Oi13ZWJraXQtbWVkaWEtY29udHJvbHMtdGltZS1yZW1haW5pbmctZGlzcGxheXtkaXNwbGF5Om5vbmV9dmlkZW86Oi13ZWJraXQtbWVkaWEtY29udHJvbHMtdG9nZ2xlLWNsb3NlZC1jYXB0aW9ucy1idXR0b24sdmlkZW86Oi13ZWJraXQtbWVkaWEtY29udHJvbHMtdm9sdW1lLXNsaWRlcntkaXNwbGF5Om5vbmV9dmlkZW86Oi13ZWJraXQtbWVkaWEtY29udHJvbHMtZW5jbG9zdXJle2Rpc3BsYXk6bm9uZX0uaHBsYXllci1tYXNre3Bvc2l0aW9uOmFic29sdXRlO3RvcDowO2JvdHRvbTowO2xlZnQ6MDtyaWdodDowO3otaW5kZXg6MTtkaXNwbGF5Om5vbmV9LmhwbGF5ZXItbWFzay5ocGxheWVyLW1hc2stc2hvd3tkaXNwbGF5OmJsb2NrfS5ocGxheWVyLXZpZGVvLXdyYXB7cG9zaXRpb246cmVsYXRpdmU7Zm9udC1zaXplOjA7d2lkdGg6MTAwJTtoZWlnaHQ6MTAwJX0uaHBsYXllci12aWRlby13cmFwIC5ocGxheWVyLXZpZGVve3dpZHRoOjEwMCU7aGVpZ2h0OjEwMCU7ZGlzcGxheTpub25lfS5ocGxheWVyLXZpZGVvLXdyYXAgLmhwbGF5ZXItdmlkZW8tY3VycmVudHtkaXNwbGF5OmJsb2NrfS5ocGxheWVyLXZpZGVvLXdyYXAgLmhwbGF5ZXItdmlkZW8tcHJlcGFyZXtkaXNwbGF5Om5vbmV9LmhwbGF5ZXItaW5mby1wYW5lbHtwb3NpdGlvbjphYnNvbHV0ZTt0b3A6MTBweDtsZWZ0OjEwcHg7d2lkdGg6NDAwcHg7YmFja2dyb3VuZDpyZ2JhKDI4LDI4LDI4LC44KTtwYWRkaW5nOjEwcHg7Y29sb3I6I2ZmZjtmb250LXNpemU6MTJweDtib3JkZXItcmFkaXVzOjJweH0uaHBsYXllci1pbmZvLXBhbmVsLWhpZGV7ZGlzcGxheTpub25lfS5ocGxheWVyLWluZm8tcGFuZWwgLmhwbGF5ZXItaW5mby1wYW5lbC1jbG9zZXtjdXJzb3I6cG9pbnRlcjtwb3NpdGlvbjphYnNvbHV0ZTtyaWdodDoxMHB4O3RvcDoxMHB4fS5ocGxheWVyLWluZm8tcGFuZWwgLmhwbGF5ZXItaW5mby1wYW5lbC1pdGVtPnNwYW57ZGlzcGxheTppbmxpbmUtYmxvY2s7dmVydGljYWwtYWxpZ246bWlkZGxlO2xpbmUtaGVpZ2h0OjE1cHg7d2hpdGUtc3BhY2U6bm93cmFwO3RleHQtb3ZlcmZsb3c6ZWxsaXBzaXM7b3ZlcmZsb3c6aGlkZGVufS5ocGxheWVyLWluZm8tcGFuZWwgLmhwbGF5ZXItaW5mby1wYW5lbC1pdGVtLXRpdGxle3dpZHRoOjEwMHB4O3RleHQtYWxpZ246cmlnaHQ7bWFyZ2luLXJpZ2h0OjEwcHh9LmhwbGF5ZXItaW5mby1wYW5lbCAuaHBsYXllci1pbmZvLXBhbmVsLWl0ZW0tZGF0YXt3aWR0aDoyNjBweH0uaHBsYXllci1wcmVzc3tkaXNwbGF5Om5vbmU7cG9zaXRpb246YWJzb2x1dGU7dG9wOjE0cHg7bGVmdDo1MCU7dHJhbnNmb3JtOnRyYW5zbGF0ZVgoLTUwJSk7YWxpZ24taXRlbXM6Y2VudGVyO2p1c3RpZnktY29udGVudDpjZW50ZXI7d2lkdGg6MTE1cHg7aGVpZ2h0OjMwcHg7YmFja2dyb3VuZDpyZ2JhKDE3LDE3LDE3LC42KTtib3JkZXItcmFkaXVzOjI2LjI1cHh9LmhwbGF5ZXItcHJlc3MuaHBsYXllci1wcmVzcy1tb2RhbC1zaG93e2Rpc3BsYXk6ZmxleH0uaHBsYXllci1wcmVzcyAuaHBsYXllci1pY29uLXByZXNze2Rpc3BsYXk6bm9uZTt3aWR0aDoyNHB4O2hlaWdodDoyNHB4O2JhY2tncm91bmQ6dHJhbnNwYXJlbnQ7YmFja2dyb3VuZC1zaXplOjEwMCUgMTAwJTttYXJnaW4tcmlnaHQ6NnB4fS5ocGxheWVyLXByZXNzIC5ocGxheWVyLWljb24tcHJlc3MuaWNvbi1wcmVzcy1zaG93e2Rpc3BsYXk6YmxvY2t9LmhwbGF5ZXItcHJlc3MgcHtmb250LWZhbWlseTpQaW5nRmFuZ1NDLVJlZ3VsYXI7Zm9udC1zaXplOjEycHg7Y29sb3I6I2ZmZjtsaW5lLWhlaWdodDozMHB4O2ZvbnQtd2VpZ2h0OjQwMDttYXJnaW46MH0uaHBsYXllci1wcmVzcyAuaHBsYXllci1wcmVzcy1zcGVlZHtmb250LWZhbWlseTpQaW5nRmFuZ1NDLVNlbWlib2xkO2ZvbnQtc2l6ZToxNHB4O2ZvbnQtd2VpZ2h0OjYwMH0uaHBsYXllci1zd2lwZXtkaXNwbGF5Om5vbmU7cG9zaXRpb246YWJzb2x1dGU7dG9wOjUwJTtsZWZ0OjUwJTt0cmFuc2Zvcm06dHJhbnNsYXRlKC01MCUsLTUwJSk7d2lkdGg6MTI0cHg7aGVpZ2h0Ojg1cHg7YmFja2dyb3VuZDpyZ2JhKDE3LDE3LDE3LC43KTtib3JkZXItcmFkaXVzOjRweH0uaHBsYXllci1zd2lwZS5ocGxheWVyLXN3aXBlLXNob3d7ZGlzcGxheTpibG9ja30uaHBsYXllci1zd2lwZSAuaHBsYXllci1pY29uLXN3aXBle2Rpc3BsYXk6bm9uZTt3aWR0aDoyNnB4O2hlaWdodDoyNnB4O21hcmdpbjoxMnB4IGF1dG8gN3B4fS5ocGxheWVyLXN3aXBlIC5ocGxheWVyLWljb24tc3dpcGUuc3dpcGUtaWNvbi1zaG93e2Rpc3BsYXk6YmxvY2t9LmhwbGF5ZXItc3dpcGUgLnN3aXBlLXRpbWUtdGV4dHtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcn0uaHBsYXllci1zd2lwZSAuc3dpcGUtdGltZS10ZXh0IC5jdXJyZW50LXRpbWUtdGV4dCwuaHBsYXllci1zd2lwZSAuc3dpcGUtdGltZS10ZXh0IC50b3RhbC10aW1lLXRleHR7Zm9udC1mYW1pbHk6UGluZ0ZhbmdTQy1SZWd1bGFyO2ZvbnQtc2l6ZToxMnB4O2NvbG9yOiM5OTk7bGluZS1oZWlnaHQ6MTIuMTdweDtmb250LXdlaWdodDo0MDA7bWFyZ2luOjB9LmhwbGF5ZXItc3dpcGUgLnN3aXBlLXRpbWUtdGV4dCAuY3VycmVudC10aW1lLXRleHR7Y29sb3I6I2ZmZn0uaHBsYXllci1zd2lwZSAuc3dpcGUtY29udGVudHtwb3NpdGlvbjpyZWxhdGl2ZTt3aWR0aDo3N3B4O2hlaWdodDoycHg7YmFja2dyb3VuZDojZTBlMGUwO2JvcmRlci1yYWRpdXM6LjgzcHg7bWFyZ2luOjlweCBhdXRvIDB9LmhwbGF5ZXItc3dpcGUgLnN3aXBlLWNvbnRlbnQgLnN3aXBlLWJhcntwb3NpdGlvbjphYnNvbHV0ZTt0b3A6MDtsZWZ0OjA7aGVpZ2h0OjJweDtiYWNrZ3JvdW5kOiNmZjRkNGQ7Ym9yZGVyLXJhZGl1czouODNweH0iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <link rel="stylesheet" type="text/css" href="./details-mobile_files/132.96c4ef.css">

    <link rel="stylesheet" type="text/css" href="./details-mobile_files/138.259b57.css">

</head>

<body>
    <div id="rooot">
        <div class="navigation">
            <div class="navigation-brand"><img src="./details-mobile_files/a8f12df5dde8.png" alt="haokan"></div>
            <div class="navigation-search">
                <div class="navigation-search-img"></div>
                <div class="navigation-search-text">
                    <div class="navigation-search-text-li">未成年文身不是私事</div>
                    <div class="navigation-search-text-li">语文考试允许用字典</div>
                    <div class="navigation-search-text-li">12组关键词读懂两高</div>
                    <div class="navigation-search-text-li">切尔诺贝利完全断电</div>
                    <div class="navigation-search-text-li">苏翊鸣谷爱凌学冲浪</div>
                    <div class="navigation-search-text-li">陕西增10例本土确诊</div>
                </div>
            </div>
            <div class="navigation-download wx-share-launch">
                <div>下载APP</div>
            </div>
        </div>
        <div class="video-player navigation-normal">
            <div class="video-container">
                <div class="hplayer video hplayer-no-danmaku hplayer-mobile hplayer-arrow" id="video"
                    style="object-fit: fill;">
                    <div class="hplayer-mask"></div>
                    <div class="hplayer-video-wrap">

                        <video class="hplayer-video hplayer-video-current" webkit-playsinline=""
                            x-webkit-airplay="allow" playsinline=""
                            poster="https://f7.baidu.com/it/u=3770871070,1770162692&amp;fm=222&amp;app=108&amp;f=JPEG@s_0,w_800,h_1000,q_80"
                            preload="metadata"
                            src="https://vd4.bdstatic.com/mda-nc7ert0a4q3ev193/hd/cae_h264_delogo/1646735481121558673/mda-nc7ert0a4q3ev193.mp4?auth_key=1646852070-0-0-3f159a0b35420673430c6375f340d0d2&amp;bcevod_channel=searchbox_feed&amp;cd=0&amp;pd=1&amp;pt=3&amp;logid=1469981250&amp;vid=11877332515796690602&amp;abtest=all"
                            disablepictureinpicture="true" x5-video-orientation="landscape" x5-video-player-type="h5"
                            controlslist="nodownload nofullscreen noremoteplayback">

                        </video>

                        <div class="hplayer-danmaku">
                            <div class="hplayer-danmaku-item hplayer-danmaku-item--demo"></div>
                        </div>
                        <div class="hplayer-subtitle"></div>
                        <div class="hplayer-bezel">
                            <span class="hplayer-bezel-icon"></span>

                            <span class="diplayer-loading-icon"><svg version="1.1" viewBox="0 0 22 22"><svg x="7" y="1">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-0" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="11" y="3">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-1" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="13" y="7">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-2" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="11" y="11">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-3" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="7" y="13">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-4" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="3" y="11">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-5" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="1" y="7">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-6" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg><svg x="3" y="3">
                                        <circle class="diplayer-loading-dot diplayer-loading-dot-7" cx="4" cy="4" r="2">
                                        </circle>
                                    </svg></svg></span>
                        </div>
                    </div>

                    <div class="hplayer-icons hplayer-speed">
                        <button class="hplayer-icon hplayer-speed-icon">
                            <span class="hplayer-icon-speed"><svg viewBox="0 0 75 72" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>形状结合</title>
                                    <g id="h5" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="倍速备份" transform="translate(-12.000000, -13.000000)" fill="#FFFFFF"
                                            fill-rule="nonzero">
                                            <g id="编组-4" transform="translate(12.980392, 13.750063)">
                                                <path
                                                    d="M6.75098039,56.7585435 L6.75098039,59.4862745 C6.75098039,62.0379845 8.76208976,64.1199747 11.2857353,64.2336719 L11.503268,64.2385621 L62.1176471,64.2385621 C64.669357,64.2385621 66.7513472,62.2274527 66.8650444,59.7038072 L66.8699346,59.4862745 L66.8699346,56.7585435 L73.4699346,56.7585435 L73.4699346,59.4862745 C73.4699346,65.6580058 68.5449325,70.6794413 62.4106547,70.8348543 L62.1176471,70.8385621 L11.503268,70.8385621 C5.33153666,70.8385621 0.310101221,65.91356 0.154688134,59.7792822 L0.150980392,59.4862745 L0.150980392,56.7585435 L6.75098039,56.7585435 Z M23.0350958,20.3751634 L23.0340861,22.8405265 L30.7319721,22.8408294 L30.7319721,26.6837142 L9.79602434,26.6837142 L9.79588832,24.2974538 C9.30468327,25.8376528 8.75199612,27.1566651 8.13629307,28.255195 L8.00685148,28.4771278 L8.00786117,51.6402524 L3.03210277,51.6402524 L3.03109308,33.1663358 L2.61569147,33.3702683 C2.32157543,33.5084486 2.01744825,33.6399083 1.70331986,33.7646662 L1.22462762,33.9467793 L0.730941,34.1188541 L0,34.3625011 L0,30.8703155 L0.519104402,30.5075301 C3.0605735,28.6662482 4.71209757,25.6210552 5.4609973,21.3411403 L5.61132369,20.4084832 L10.8178872,20.4084832 L10.5308614,21.6389565 C10.4317817,22.0522606 10.3294195,22.4535761 10.2237556,22.8429116 L17.4252513,22.8405265 L17.426261,20.3751634 L23.0350958,20.3751634 Z M63.5472256,20.3751634 L63.5462159,22.3407293 L72.2436962,22.3410322 L72.2436962,26.1505973 L63.5462159,26.1502943 L63.5462159,27.3720207 L71.0108632,27.3723236 L71.0108632,37.7125716 L65.239973,37.7122686 L65.3585146,37.872744 C66.7692972,39.7208024 68.7594171,41.2906421 71.3361269,42.580889 L71.8261358,42.8195335 L72.1437368,42.969976 L72.1437368,46.6324808 L71.4074655,46.3787376 C68.285537,45.3028187 65.8100712,44.0073542 63.9836438,42.4853246 L63.6487952,42.1972873 L63.5462159,42.1038197 L63.5472256,47.0087987 L58.6714266,47.0087987 L58.6704169,42.1038197 L58.554854,42.2067493 C56.9031397,43.630665 54.6924408,44.8841691 51.9240367,45.9727908 L51.3629202,46.1883184 L50.9118248,46.3543849 C51.4911184,46.7342526 52.243536,46.9523555 53.1776404,47.0156412 L53.4957494,47.0310119 L72.6102141,47.0310119 L72.6102141,51.007176 L53.0928142,51.0071674 L52.7530689,51.0052165 C50.5248906,50.961172 48.7939615,50.3003287 47.5995209,49.020929 L47.4054216,48.8019681 L47.3738905,48.7622285 L47.2313229,48.9208241 C46.1337834,50.0771171 44.6640233,50.8635496 42.8361888,51.2809503 L42.4390343,51.3647452 L42.0567744,51.4330446 L41.4117647,51.5385917 L41.4117647,48.2445197 L41.9591675,47.9677128 C43.498021,47.1526087 44.24336,46.0055177 44.2491692,44.4386267 L44.2439486,44.1877214 L44.2429389,34.0137697 L41.4784043,34.0140726 L41.4784043,30.2045076 L49.4196259,30.2045076 L49.4190075,43.0952886 L49.4310774,43.3525298 C49.4898059,44.2672439 49.7121979,45.0050426 50.1071355,45.5731328 L50.1082353,43.0552558 L50.4017042,42.8983315 C52.8551983,41.5863937 54.8259993,40.0597875 56.3183825,38.3194723 L56.6308577,37.9432769 L56.8100609,37.7122686 L51.2411089,37.7125716 L51.2411089,27.3723236 L58.6704169,27.3720207 L58.6704169,26.1502943 L50.2081947,26.1505973 L50.2081947,22.3410322 L58.6704169,22.3407293 L58.6714266,20.3751634 L63.5472256,20.3751634 Z M29.7656975,37.701465 L29.7656975,51.2720332 L10.6623394,51.2737345 L10.6623394,37.701465 L29.7656975,37.701465 Z M24.5755816,41.033446 L15.6936308,41.033446 L15.6936308,47.6922246 L24.5755816,47.6922246 L24.5755816,41.033446 Z M28.4210056,27.0724453 L28.2447285,28.2653277 C28.0615764,29.3876509 27.7828527,30.4497526 27.4084065,31.451079 L27.2132058,31.9466751 L27.1435294,32.1034339 L31.7648862,32.1037368 L31.7648862,35.9466216 L8.62983097,35.9466216 L8.62983097,32.1037368 L13.0670201,32.1034339 L13.0128847,31.9730901 C12.6377076,31.0244062 12.3418111,29.9995932 12.1248018,28.8989118 L12.0228692,28.34225 L11.9340736,27.7729507 L11.8435213,27.139085 L16.7700078,27.139085 L16.8970545,28.1152669 C17.074527,29.3851542 17.3273442,30.4915497 17.6537412,31.4338588 L17.7795856,31.779532 L17.9094992,32.1034339 L22.3121569,32.1034339 L22.3299648,32.0619289 C22.7304446,31.0738034 23.0413357,29.9461717 23.2615698,28.6791018 L23.3504023,28.127535 L23.4281152,27.5588953 L23.4889215,27.0724453 L28.4210056,27.0724453 Z M66.9554147,30.3711066 L63.6249718,30.3711066 L63.6252832,33.9047831 L66.9554147,33.9047831 L66.9554147,30.3711066 Z M58.6302719,30.5610698 L55.2982909,30.5610698 L55.2982909,33.8930509 L58.6302719,33.8930509 L58.6302719,30.5610698 Z M47.844515,21.1081992 L48.2991021,22.0362018 C49.0928962,23.7089689 49.7269441,25.4752163 50.2012867,27.3344506 L50.371679,28.0360212 L50.5286486,28.7162227 L45.397584,28.7162227 L45.2411635,27.806999 C44.9404504,26.1803511 44.3855113,24.4011249 43.5752886,22.4705692 L43.3245622,21.8868638 L42.982532,21.1081992 L47.844515,21.1081992 Z M62.1176471,0 C68.2893784,0 73.3108138,4.92500213 73.4662269,11.0592799 L73.4699346,11.3522876 L73.4699346,14.6427638 L66.8699346,14.6427638 L66.8699346,11.3522876 C66.8699346,8.80057762 64.8588253,6.71858742 62.3351798,6.60489021 L62.1176471,6.6 L11.503268,6.6 C8.95155801,6.6 6.86956782,8.61110937 6.75587061,11.1347549 L6.75098039,11.3522876 L6.75098039,14.6427638 L0.150980392,14.6427638 L0.150980392,11.3522876 C0.150980392,5.18055626 5.07598253,0.159120829 11.2102603,0.00370774165 L11.503268,0 L62.1176471,0 Z"
                                                    id="形状结合"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                        </button>
                        <div class="hplayer-speed-mask">
                            <div class="hplayer-speed-list">

                                <div class="hplayer-speed-item" data-index="0" data-speed="0.75">0.75</div>

                                <div class="hplayer-speed-item" data-index="1" data-speed="1">1</div>

                                <div class="hplayer-speed-item" data-index="2" data-speed="1.25">1.25</div>

                                <div class="hplayer-speed-item" data-index="3" data-speed="1.5">1.5</div>

                                <div class="hplayer-speed-item" data-index="4" data-speed="2">2</div>

                            </div>
                        </div>
                    </div>

                    <div class="hplayer-controller-mask"></div>
                    <div class="hplayer-controller">
                        <div class="hplayer-icons hplayer-comment-box">
                            <button class="hplayer-icon hplayer-comment-setting-icon" data-balloon="设置"
                                data-balloon-pos="up">
                                <span class="hplayer-icon-content">undefined</span>
                            </button>
                            <div class="hplayer-comment-setting-box">
                                <div class="hplayer-comment-setting-color">
                                    <div class="hplayer-comment-setting-title">设置弹幕颜色</div>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-color-0" value="#fff" checked="">
                                        <span style="background: #fff;"></span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-color-0" value="#e54256">
                                        <span style="background: #e54256"></span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-color-0" value="#ffe133">
                                        <span style="background: #ffe133"></span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-color-0" value="#64DD17">
                                        <span style="background: #64DD17"></span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-color-0" value="#39ccff">
                                        <span style="background: #39ccff"></span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-color-0" value="#D500F9">
                                        <span style="background: #D500F9"></span>
                                    </label>
                                </div>
                                <div class="hplayer-comment-setting-type">
                                    <div class="hplayer-comment-setting-title">设置弹幕类型</div>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-type-0" value="1">
                                        <span>顶部</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-type-0" value="0" checked="">
                                        <span>滚动</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="hplayer-danmaku-type-0" value="2">
                                        <span>底部</span>
                                    </label>
                                </div>
                            </div>
                            <input class="hplayer-comment-input" type="text" placeholder="输入弹幕，回车发送" maxlength="30">
                            <button class="hplayer-icon hplayer-send-icon" data-balloon="发送" data-balloon-pos="up">
                                <span class="hplayer-icon-content">undefined</span>
                            </button>
                        </div>
                        <div class="hplayer-icons hplayer-icons-left">
                            <div class="hplayer-volume">
                                <button class="hplayer-icon hplayer-volume-icon">
                                    <span class="hplayer-icon-content"><svg viewBox="0 0 72 61" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>形状结合</title>
                                            <g id="h5" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="音量备份" transform="translate(-6.000000, -10.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g id="喇叭开-copy-4" transform="translate(3.375000, 6.750000)">
                                                        <path
                                                            d="M33.7010441,5.12792095 C37.3700811,2.29774304 42.6482646,2.96547066 45.4901969,6.61933233 C46.6309658,8.08601464 47.25,9.88862246 47.25,11.7438227 L47.25,11.7438227 L47.25,55.7565737 C47.25,60.3783279 43.4877671,64.125 38.8468177,64.125 C36.9839877,64.125 35.1739621,63.508576 33.701218,62.3726097 L33.701218,62.3726097 L17.5226764,49.6173329 L12.1907879,49.61778 C7.40833176,49.61778 3.5187523,45.8249911 3.37889402,41.0981083 L3.37889402,41.0981083 L3.375,40.8345609 L3.375,27.2643234 C3.375,22.4156676 7.31976776,18.4811043 12.1907879,18.4811043 L12.1907879,18.4811043 L17.5226764,18.4805108 Z M40.3985545,10.9201455 C39.7084117,10.0246295 38.4266427,9.86097773 37.5356434,10.5546191 L37.5356434,10.5546191 L20.7982632,24.1879285 C20.176973,24.6715798 19.413787,24.9339807 18.6283906,24.9339807 L18.6283906,24.9339807 L12.1525397,24.9339807 C10.8041664,24.9339807 9.7110939,26.0343033 9.7110939,27.39162 L9.7110939,27.39162 L9.7110939,40.6952048 C9.7110939,42.0525215 10.8041664,43.1528442 12.1525397,43.1528442 L12.1525397,43.1528442 L18.6283906,43.1528442 C19.413787,43.1528442 20.176973,43.4152451 20.7982632,43.8988963 L20.7982632,43.8988963 L37.5356857,56.945511 C37.893331,57.2239221 38.3328827,57.375 38.7852576,57.375 C39.9122788,57.375 40.8259101,56.4567373 40.8259101,55.3240029 L40.8259101,55.3240029 L40.8259101,12.1760942 C40.8259101,11.7214078 40.6755821,11.279611 40.3985545,10.9201455 Z M66.6039458,11.4764319 C71.3648451,17.3087095 74.075,25.2437899 74.075,33.6842004 C74.075,42.2653448 71.7645078,50.0508297 67.3786447,55.6444806 L67.0763954,56.022453 L62.1166842,51.977547 C65.6924076,47.5931299 67.675,41.0761729 67.675,33.6842004 C67.675,26.8693869 65.567147,20.5230515 61.935887,15.8860716 L61.6460542,15.5235681 L66.6039458,11.4764319 Z M56.715821,21.8865071 C59.2082679,25.7381914 60.575,30.4615385 60.575,35.4149664 C60.575,40.2197731 59.2890036,44.8078929 56.9376275,48.5935891 L56.6816277,48.9961023 L51.3183723,45.5038977 C53.1487588,42.6928282 54.175,39.1636682 54.175,35.4149664 C54.175,31.8387673 53.2410739,28.4621645 51.5654385,25.7178285 L51.3426869,25.3634929 L56.715821,21.8865071 Z"
                                                            id="形状结合"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                </button>
                            </div>
                            <span class="hplayer-time hplayer-active-time">
                                <span class="hplayer-ptime">00:00</span>
                            </span>

                        </div>

                        <div class="hplayer-bar-wrap">
                            <div class="hplayer-bar-preview"></div>
                            <div class="hplayer-bar">
                                <div class="hplayer-loaded" style="width: 11.1118%;"></div>
                                <div class="hplayer-played" style="width: 0; background: rgba(255,65,65,0.70)">
                                    <span class="hplayer-thumb"></span>
                                </div>
                            </div>
                        </div>
                        <div class="hplayer-time hplayer-all-time">
                            <span class="hplayer-dtime">01:26</span>
                        </div>

                        <div class="hplayer-icons hplayer-icons-right">
                            <div class="hplayer-full">
                                <button class="hplayer-icon hplayer-full-icon" data-balloon="全屏" data-balloon-pos="up">
                                    <span class="hplayer-icon-content"><svg viewBox="0 0 64 64" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>形状结合</title>
                                            <g id="h5" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="全屏备份" transform="translate(-9.000000, -9.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g id="编组-3" transform="translate(9.096608, 9.096608)">
                                                        <path
                                                            d="M41.4382225,0 L42.4222243,0.00491075957 C42.7416225,0.00820880353 43.0525763,0.0131921759 43.35556,0.0199334893 L43.35556,0.0199334893 L44.2410747,0.0455038658 L45.0816131,0.0820575657 L45.8800201,0.130030266 C49.6417532,0.390196154 52.02682,1.06576967 54.4807016,2.37811989 C57.4786618,3.98144654 59.8506547,6.3534395 61.4539814,9.35139969 C61.5444883,9.5206329 61.6319665,9.68953881 61.7164887,9.85859156 L61.7164887,9.85859156 L61.9612598,10.3666645 C62.9054522,12.4045115 63.4344295,14.5317802 63.6736664,17.5677879 L63.6736664,17.5677879 L63.727512,18.346196 L63.7697207,19.1653131 C63.7879885,19.5855231 63.8020558,20.0220657 63.8121678,20.4765412 L63.8121678,20.4765412 L63.8271905,21.409877 C63.8304886,21.7292752 63.8321013,22.0571177 63.8321013,22.3938787 L63.8321013,22.3938787 L63.8321013,41.4382225 L63.8271905,42.4222243 C63.8255415,42.5819234 63.8234711,42.7395114 63.8209704,42.8950476 L63.8209704,42.8950476 L63.8007283,43.8041172 C63.7922109,44.0992492 63.7818992,44.3866482 63.7697207,44.6667881 L63.7697207,44.6667881 L63.727512,45.4859052 L63.6736664,46.2643134 C63.4543659,49.0473204 62.991603,51.0667343 62.1887302,52.9536379 L62.1887302,52.9536379 L61.9612598,53.4654368 L61.7164887,53.9735097 C61.6319665,54.1425625 61.5444883,54.3114684 61.4539814,54.4807016 C59.8506547,57.4786618 57.4786618,59.8506547 54.4807016,61.4539814 C54.3114684,61.5444883 54.1425625,61.6319665 53.9735097,61.7164887 L53.9735097,61.7164887 L53.4654368,61.9612598 L52.9536379,62.1887302 C51.0667343,62.991603 49.0473204,63.4543659 46.2643134,63.6736664 L46.2643134,63.6736664 L45.4859052,63.727512 L44.6667881,63.7697207 C44.2465782,63.7879885 43.8100356,63.8020558 43.35556,63.8121678 L43.35556,63.8121678 L42.4222243,63.8271905 C42.1028261,63.8304886 41.7749835,63.8321013 41.4382225,63.8321013 L41.4382225,63.8321013 L22.3938787,63.8321013 L21.409877,63.8271905 C21.2501779,63.8255415 21.0925899,63.8234711 20.9370537,63.8209704 L20.9370537,63.8209704 L20.0279841,63.8007283 C19.732852,63.7922109 19.4454531,63.7818992 19.1653131,63.7697207 L19.1653131,63.7697207 L18.346196,63.727512 L17.5677879,63.6736664 C14.5317802,63.4344295 12.4045115,62.9054522 10.3666645,61.9612598 L10.3666645,61.9612598 L9.85859156,61.7164887 C9.68953881,61.6319665 9.5206329,61.5444883 9.35139969,61.4539814 C6.3534395,59.8506547 3.98144654,57.4786618 2.37811989,54.4807016 C1.06576967,52.02682 0.390196154,49.6417532 0.130030266,45.8800201 L0.130030266,45.8800201 L0.0820575657,45.0816131 L0.0455038658,44.2410747 L0.0199334893,43.35556 C0.0131921759,43.0525763 0.00820880353,42.7416225 0.00491075957,42.4222243 L0.00491075957,42.4222243 L0,41.4382225 L0,22.3938787 L0.00491075957,21.409877 C0.00820880353,21.0904788 0.0131921759,20.7795249 0.0199334893,20.4765412 L0.0199334893,20.4765412 L0.0455038658,19.5910266 L0.0820575657,18.7504882 L0.130030266,17.9520811 L0.189857642,17.1929607 L0.261975371,16.4702819 C0.588675919,13.5310894 1.24678349,11.4668148 2.37811989,9.35139969 C3.98144654,6.3534395 6.3534395,3.98144654 9.35139969,2.37811989 C11.4668148,1.24678349 13.5310894,0.588675919 16.4702819,0.261975371 L16.4702819,0.261975371 L17.1929607,0.189857642 L17.9520811,0.130030266 L18.7504882,0.0820575657 L19.5910266,0.0455038658 L20.4765412,0.0199334893 C20.7795249,0.0131921759 21.0904788,0.00820880353 21.409877,0.00491075957 L21.409877,0.00491075957 L22.3938787,0 L41.4382225,0 Z M41.4382225,6.41437975 L21.9589407,6.41525899 C21.6736386,6.4164357 21.3975647,6.41880222 21.1302099,6.42241102 L21.1302099,6.42241102 L20.3537939,6.43701676 L19.6266381,6.45939099 L18.9456881,6.48984852 L18.3078893,6.52870414 L17.7101873,6.57627263 L17.1495276,6.63286879 C15.7916356,6.78590613 14.752379,7.02652908 13.8169882,7.37687154 L13.8169882,7.37687154 L13.4478624,7.5229127 L13.086761,7.68097207 L12.7306297,7.85136444 L12.3764139,8.0344046 C10.4962778,9.03991235 9.03991235,10.4962778 8.0344046,12.3764139 L8.0344046,12.3764139 L7.85136444,12.7306297 L7.68097207,13.086761 L7.5229127,13.4478624 L7.37687154,13.8169882 C7.02652908,14.752379 6.78590613,15.7916356 6.63286879,17.1495276 L6.63286879,17.1495276 L6.57627263,17.7101873 L6.52870414,18.3078893 L6.48984852,18.9456881 L6.45939099,19.6266381 L6.43701676,20.3537939 C6.43394384,20.4790067 6.43119461,20.606272 6.4287625,20.7356535 L6.4287625,20.7356535 L6.41792297,21.5378451 C6.41554333,21.8140463 6.41437975,22.0992211 6.41437975,22.3938787 L6.41437975,22.3938787 L6.41437975,41.4382225 L6.41792297,42.2942562 C6.41911279,42.4323568 6.42060662,42.5682139 6.42241102,42.7018913 L6.42241102,42.7018913 L6.43701676,43.4783074 L6.45939099,44.2054632 L6.48984852,44.8864132 L6.52870414,45.524212 C6.5358974,45.6270855 6.5434537,45.7282884 6.5513796,45.8278842 L6.5513796,45.8278842 L6.60342258,46.4066832 C6.75431071,47.9014365 7.00317291,49.0173629 7.37687154,50.015113 L7.37687154,50.015113 L7.5229127,50.3842389 L7.68097207,50.7453403 L7.85136444,51.1014716 L8.0344046,51.4556874 C9.03991235,53.3358234 10.4962778,54.7921889 12.3764139,55.7976967 L12.3764139,55.7976967 L12.7306297,55.9807368 C12.7897404,56.0101808 12.848931,56.0390978 12.908265,56.0674943 L12.908265,56.0674943 L13.2664995,56.2316808 C14.3494218,56.7058196 15.5200573,57.0155877 17.1495276,57.1992325 L17.1495276,57.1992325 L17.7101873,57.2558286 L18.3078893,57.3033971 L18.9456881,57.3422527 C19.0554989,57.3480201 19.1671078,57.3534375 19.2805783,57.3585116 L19.2805783,57.3585116 L19.9842494,57.3848881 L20.7356535,57.4033388 C20.8650349,57.4057709 20.9965325,57.4078858 21.1302099,57.4096902 L21.1302099,57.4096902 L21.9589407,57.4168423 L41.4382225,57.4177215 L42.2942562,57.4141783 L43.0964478,57.4033388 C43.2258293,57.4009067 43.3530946,57.3981574 43.4783074,57.3950845 L43.4783074,57.3950845 L44.2054632,57.3727103 L44.8864132,57.3422527 L45.524212,57.3033971 C45.6270855,57.2962039 45.7282884,57.2886476 45.8278842,57.2807217 L45.8278842,57.2807217 L46.4066832,57.2286787 C48.1817027,57.049499 49.4225171,56.7321606 50.5656017,56.2316808 L50.5656017,56.2316808 L50.9238363,56.0674943 C50.9831703,56.0390978 51.0423609,56.0101808 51.1014716,55.9807368 L51.1014716,55.9807368 L51.4556874,55.7976967 C53.3358234,54.7921889 54.7921889,53.3358234 55.7976967,51.4556874 L55.7976967,51.4556874 L55.9807368,51.1014716 C56.0101808,51.0423609 56.0390978,50.9831703 56.0674943,50.9238363 L56.0674943,50.9238363 L56.2316808,50.5656017 C56.7585017,49.3623548 57.0823958,48.0508199 57.2558286,46.121914 L57.2558286,46.121914 L57.3033971,45.524212 L57.3422527,44.8864132 C57.3480201,44.7766023 57.3534375,44.6649935 57.3585116,44.551523 L57.3585116,44.551523 L57.3848881,43.8478519 L57.4033388,43.0964478 C57.4057709,42.9670663 57.4078858,42.8355687 57.4096902,42.7018913 L57.4096902,42.7018913 L57.4168423,41.8731605 L57.4177215,22.3938787 L57.4141783,21.5378451 L57.4033388,20.7356535 C57.4009067,20.606272 57.3981574,20.4790067 57.3950845,20.3537939 L57.3950845,20.3537939 L57.3727103,19.6266381 L57.3422527,18.9456881 L57.3033971,18.3078893 L57.2558286,17.7101873 L57.1992325,17.1495276 C57.0155877,15.5200573 56.7058196,14.3494218 56.2316808,13.2664995 L56.2316808,13.2664995 L56.0674943,12.908265 C56.0390978,12.848931 56.0101808,12.7897404 55.9807368,12.7306297 L55.9807368,12.7306297 L55.7976967,12.3764139 C54.7921889,10.4962778 53.3358234,9.03991235 51.4556874,8.0344046 L51.4556874,8.0344046 L51.1014716,7.85136444 L50.7453403,7.68097207 L50.3842389,7.5229127 L50.015113,7.37687154 C48.9550035,6.97981675 47.761484,6.72369058 46.121914,6.57627263 L46.121914,6.57627263 L45.524212,6.52870414 L44.8864132,6.48984852 L44.2054632,6.45939099 L43.4783074,6.43701676 C43.3530946,6.43394384 43.2258293,6.43119461 43.0964478,6.4287625 L43.0964478,6.4287625 L42.2942562,6.41792297 C42.018055,6.41554333 41.7328801,6.41437975 41.4382225,6.41437975 L41.4382225,6.41437975 Z M49.4776709,32.8101266 L49.4776709,44.9560842 C49.4776709,45.8569538 49.3456875,46.5404198 48.9616756,47.2584596 C48.5734062,47.9844603 47.9844603,48.5734062 47.2584596,48.9616756 C46.6122237,49.3072863 45.9939927,49.4487539 45.2200749,49.4735913 L44.9560842,49.4776709 L32.8101266,49.4776709 L32.8101266,43.0632911 L43.0631899,43.0631899 L43.0632911,32.8101266 L49.4776709,32.8101266 Z M29.9966582,13.3291139 L29.9966582,19.7434937 L19.7431899,19.7431899 L19.7434937,29.9966582 L13.3291139,29.9966582 L13.3291139,17.8507006 C13.3291139,16.949831 13.4610973,16.2663651 13.8451092,15.5483252 C14.2333786,14.8223245 14.8223245,14.2333786 15.5483252,13.8451092 C16.1945611,13.4994985 16.8127921,13.3580309 17.5867099,13.3331935 L17.8507006,13.3291139 L29.9966582,13.3291139 Z"
                                                            id="形状结合"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="hplayer-info-panel hplayer-info-panel-hide">
                        <div class="hplayer-info-panel-close">[x]</div>
                        <div class="hplayer-info-panel-item hplayer-info-panel-item-version">
                            <span class="hplayer-info-panel-item-title">Player version</span>
                            <span class="hplayer-info-panel-item-data"></span>
                        </div>
                        <div class="hplayer-info-panel-item hplayer-info-panel-item-fps">
                            <span class="hplayer-info-panel-item-title">Player FPS</span>
                            <span class="hplayer-info-panel-item-data"></span>
                        </div>
                        <div class="hplayer-info-panel-item hplayer-info-panel-item-type">
                            <span class="hplayer-info-panel-item-title">Video type</span>
                            <span class="hplayer-info-panel-item-data"></span>
                        </div>
                        <div class="hplayer-info-panel-item hplayer-info-panel-item-url">
                            <span class="hplayer-info-panel-item-title">Video url</span>
                            <span class="hplayer-info-panel-item-data"></span>
                        </div>
                        <div class="hplayer-info-panel-item hplayer-info-panel-item-resolution">
                            <span class="hplayer-info-panel-item-title">Video resolution</span>
                            <span class="hplayer-info-panel-item-data"></span>
                        </div>
                        <div class="hplayer-info-panel-item hplayer-info-panel-item-duration">
                            <span class="hplayer-info-panel-item-title">Video duration</span>
                            <span class="hplayer-info-panel-item-data"></span>
                        </div>

                    </div>
                    <div class="hplayer-menu">

                    </div>
                    <div class="hplayer-notice"></div>
                    <div class="hplayer-mobile-play">
                        <img class="deplayer-play-icon" src="./details-mobile_files/pic_4Y8ocS_1646113849.png">
                        <img class="deplayer-pause-icon" src="./details-mobile_files/pic_9SoCEP_1646113883.png">
                    </div>
                    <div class="hplayer-press">
                        <img class="hplayer-icon-press forward" src="./details-mobile_files/pic_EMpaZN_1640946354.gif">
                        <img class="hplayer-icon-press backward" src="./details-mobile_files/pic_ftXSLn_1640946193.gif">
                        <p class="hplayer-press-speed"></p>
                        <p class="hplayer-press-text"></p>
                    </div>
                    <div class="hplayer-swipe">
                        <span class="hplayer-icon-swipe forward"><svg viewBox="0 0 69 46" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>形状结合</title>
                                <g id="h5" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="沉浸态备份-2" transform="translate(-589.000000, -949.000000)" fill="#FFFFFF">
                                        <g id="视频封面" transform="translate(0.000000, 676.000000)">
                                            <g id="Group-6-Copy" transform="translate(434.000000, 221.000000)">
                                                <g id="Group-5" transform="translate(70.000000, 37.000000)">
                                                    <g id="快进icon备份" transform="translate(77.000000, 0.000000)">
                                                        <g id="编组" transform="translate(8.047689, 15.762201)">
                                                            <path
                                                                d="M2.75188139,4.97379915e-14 C3.28886577,8.17124146e-14 3.81411776,0.157106387 4.26290982,0.451958724 L33.25,19.496 L33.2503211,3.90857218 C33.2503211,2.38875005 34.4823804,1.15669079 36.0022025,1.15669079 C36.5162281,1.15669079 37.0199788,1.30066017 37.4563751,1.57228597 L67.1988133,20.0848461 C68.4891085,20.8879634 68.8840442,22.5850097 68.0809269,23.8753049 C67.858292,24.232992 67.5565004,24.5347836 67.1988133,24.7574185 L37.4563751,43.2699786 C36.1660799,44.073096 34.4690336,43.6781603 33.6659163,42.387865 C33.3942905,41.9514687 33.2503211,41.447718 33.2503211,40.9336924 L33.25,25.312 L4.25111491,44.1536897 C2.97664679,44.9816935 1.27225653,44.6197627 0.444252725,43.3452946 C0.154314881,42.8990206 -4.08562073e-14,42.3782494 -1.95399252e-14,41.846061 L2.30215846e-12,2.75188139 C2.39275266e-12,1.23205927 1.23205927,-3.90798505e-14 2.75188139,4.97379915e-14 Z"
                                                                id="形状结合"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <span class="hplayer-icon-swipe backward"><svg viewBox="0 0 69 46" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>形状结合</title>
                                <g id="h5" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="沉浸态备份-2" transform="translate(-589.000000, -949.000000)" fill="#FFFFFF">
                                        <g id="视频封面" transform="translate(0.000000, 676.000000)">
                                            <g id="Group-6-Copy" transform="translate(434.000000, 221.000000)">
                                                <g id="Group-5" transform="translate(70.000000, 37.000000)">
                                                    <g id="快进icon备份" transform="translate(77.000000, 0.000000)">
                                                        <g id="编组" transform="translate(8.047689, 15.762201)">
                                                            <path
                                                                d="M2.75188139,4.97379915e-14 C3.28886577,8.17124146e-14 3.81411776,0.157106387 4.26290982,0.451958724 L33.25,19.496 L33.2503211,3.90857218 C33.2503211,2.38875005 34.4823804,1.15669079 36.0022025,1.15669079 C36.5162281,1.15669079 37.0199788,1.30066017 37.4563751,1.57228597 L67.1988133,20.0848461 C68.4891085,20.8879634 68.8840442,22.5850097 68.0809269,23.8753049 C67.858292,24.232992 67.5565004,24.5347836 67.1988133,24.7574185 L37.4563751,43.2699786 C36.1660799,44.073096 34.4690336,43.6781603 33.6659163,42.387865 C33.3942905,41.9514687 33.2503211,41.447718 33.2503211,40.9336924 L33.25,25.312 L4.25111491,44.1536897 C2.97664679,44.9816935 1.27225653,44.6197627 0.444252725,43.3452946 C0.154314881,42.8990206 -4.08562073e-14,42.3782494 -1.95399252e-14,41.846061 L2.30215846e-12,2.75188139 C2.39275266e-12,1.23205927 1.23205927,-3.90798505e-14 2.75188139,4.97379915e-14 Z"
                                                                id="形状结合"
                                                                transform="translate(34.248448, 22.299133) scale(-1, 1) translate(-34.248448, -22.299133) ">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <div class="swipe-time-text">
                            <p class="current-time-text">00:00</p>
                            <p class="total-time-text">00:00</p>
                        </div>
                        <div class="swipe-content">
                            <div class="swipe-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-player-shade">
                <div class="shade-style "><img
                        src="./details-mobile_files/u=3770871070,1770162692&amp;fm=222&amp;app=108&amp;f=JPEG@s_0,w_800,h_1000,q_80"
                        alt="">
                    <div class="play-btn"></div>
                    <div class="video-play-bottom"><span class="bottom-play">1427次播放</span></div>
                    <div class="bottom-bg"></div>
                </div>
            </div>
            <div class="video-player-pause hide "><img
                    src="./details-mobile_files/u=3770871070,1770162692&amp;fm=222&amp;app=108&amp;f=JPEG@s_0,w_800,h_1000,q_80">
                <div class="video-player-pause-container">
                    <div>
                        <div class="video-player-pause-text">流畅更高清，打开好看视频</div>
                        <div class="video-player-pause-btns">
                            <div class="continue">当前页观看</div>
                            <div class="open wx-share-launch">打开APP</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="goods wx-share-launch"><img class="goods-img">
            <div class="goods-container">
                <div class="goods-container-title"></div>
                <div class="goods-container-info">
                    <div class="price"></div>
                    <div class="author"></div>
                </div>
            </div>
            <div class="goods-text">去购买</div>
        </div>
        <div class="open-app-top wx-share-launch">
            <div class="open-app-top-banner"><img class="logo" src="./details-mobile_files/cf9bb534bb8e.png"
                    alt="">打开好看APP，查看更多精彩视频</div>
        </div>
        <div class="video-info">
            <div class="video-info-title">锂电手电钻大品牌中可靠耐的推荐给粉丝</div>
            <div class="video-info-arrow"></div>
            <div class="video-info-text hide">
                <p>发布时间：2022年3月8日</p>
                <p>本文仅代表作者观点，不代表百度立场</p>
                <p>本文系作者授权百家号发表，未经许可，不得转载</p>
            </div>
        </div>
        <div class="gather">
            <div class="gather-item">
                <div class="item-new-show wx-share-launch"><span class="icon comment"></span><span class="text">9</span>
                </div>
            </div>
            <div class="gather-item">
                <div class="item-new-show wx-share-launch"><span class="icon collect"></span><span
                        class="text">收藏</span></div>
            </div>
            <div class="gather-item">
                <div class="item-new-show wx-share-launch"><span class="icon down"></span><span class="text">下载</span>
                </div>
            </div>
        </div>
        <div class="author-info wx-share-launch">
            <div class="author-info-avatar"><img
                    src="./details-mobile_files/bf5c058ecc43917f2ce9b46a311ee933.jpeg@s_2,w_272,h_272,q_80"></div>
            <div class="author-info-content">
                <div class="author-info-name">小尹修工具</div>
                <div class="author-info-data"><span class="author-info-fans-num">1320粉丝</span></div>
            </div>
            <div class="author-info-attention followed">已关注</div>
        </div>
        <div class="top-video-list-container">
            <div class="top-video-list-title">猜你喜欢</div>
            <div class="top-video-list">
                <div class="top-video-card wx-share-launch">
                    <div class="top-video-card-img">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=1440671672,245380870&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="top-video-card-img-bg">
                            <div class="top-video-card-img-title"></div>
                            <div class="top-video-card-img-app"><span class="app">打开APP</span></div>
                            <div class="top-video-card-img-bottom"><span class="bottom-play">232次播放</span></div>
                            <div class="card-shadow"></div>
                        </div>
                    </div>
                    <div class="top-video-card-title">今天拆解一个快30年历史的指针万用表，看看里面的做工咋样。</div>
                </div>
                <div class="top-video-card wx-share-launch">
                    <div class="top-video-card-img">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=2110010407,3592390442&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="top-video-card-img-bg">
                            <div class="top-video-card-img-title"></div>
                            <div class="top-video-card-img-app"><span class="app">打开APP</span></div>
                            <div class="top-video-card-img-bottom"><span class="bottom-play">0次播放次播放</span></div>
                            <div class="card-shadow"></div>
                        </div>
                    </div>
                    <div class="top-video-card-title">开箱录视频上瘾，今天咱们就开箱个箱</div>
                </div>
                <div class="top-video-card wx-share-launch">
                    <div class="top-video-card-img">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=4057648233,526420252&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="top-video-card-img-bg">
                            <div class="top-video-card-img-title"></div>
                            <div class="top-video-card-img-app"><span class="app">打开APP</span></div>
                            <div class="top-video-card-img-bottom"><span class="bottom-play">11次播放</span></div>
                            <div class="card-shadow"></div>
                        </div>
                    </div>
                    <div class="top-video-card-title">显卡清灰换硅脂详细教程与注意事项信越7921如何使用显卡拆解视频</div>
                </div>
                <div class="top-video-card wx-share-launch">
                    <div class="top-video-card-img">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=317095999,3906440671&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="top-video-card-img-bg">
                            <div class="top-video-card-img-title"></div>
                            <div class="top-video-card-img-app"><span class="app">打开APP</span></div>
                            <div class="top-video-card-img-bottom"><span class="bottom-play">188次播放</span></div>
                            <div class="card-shadow"></div>
                        </div>
                    </div>
                    <div class="top-video-card-title">拿大疆御3和道通like+换御air2s.今天顺便测试一下like+</div>
                </div>
            </div>
        </div>
        <div class="video-relate-list-container">
            <div class="video-relate-list-title">相关推荐</div>
            <div class="video-relate-list">
                <div class="video-relate-card">
                    <div class="video-relate-card-img-new wx-share-launch">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=702384472,1093263411&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="video-relate-card-img-bg">
                            <div class="video-relate-card-img-title">理想one圣戈班玻璃遁甲</div>
                            <div class="video-relate-card-img-play"></div>
                            <div class="video-relate-card-img-bottom"><span class="bottom-play">87次播放</span></div>
                            <div class="video-relate-card-img-app"><span class="app">打开APP</span></div>
                            <div class="card-shadow"></div>
                            <div class="card-title-shadow"></div>
                        </div>
                    </div>
                    <div class="video-relate-bottom">
                        <div class="video-relate-bottom-user wx-share-launch"><img
                                src="./details-mobile_files/d37c9476d872ac173697347901e39885.jpeg"><span>李同学吱车</span>
                        </div>
                        <div class="video-relate-bottom-btns wx-share-launch"><span class="like"><i></i></span><span
                                class="comment"><i></i></span><span class="repley"><i></i></span><span
                                class="more"><i></i><i></i><i></i></span></div>
                    </div>
                </div>
                <div class="video-relate-card">
                    <div class="video-relate-card-img-new wx-share-launch">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=1582096300,2547396678&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="video-relate-card-img-bg">
                            <div class="video-relate-card-img-title">千元电竞椅开箱，首席玩家DK2到底怎么样？</div>
                            <div class="video-relate-card-img-play"></div>
                            <div class="video-relate-card-img-bottom"><span class="bottom-play">10次播放</span></div>
                            <div class="video-relate-card-img-app"><span class="app">打开APP</span></div>
                            <div class="card-shadow"></div>
                            <div class="card-title-shadow"></div>
                        </div>
                    </div>
                    <div class="video-relate-bottom">
                        <div class="video-relate-bottom-user wx-share-launch"><img
                                src="./details-mobile_files/40360d052f00591aaa7e2da6ea5571b0.jpeg"><span>降酱晓学生</span>
                        </div>
                        <div class="video-relate-bottom-btns wx-share-launch"><span class="like"><i></i></span><span
                                class="comment"><i></i></span><span class="repley"><i></i></span><span
                                class="more"><i></i><i></i><i></i></span></div>
                    </div>
                </div>
                <div class="video-relate-card">
                    <div class="video-relate-card-img-new wx-share-launch">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=1572524366,3394891921&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="video-relate-card-img-bg">
                            <div class="video-relate-card-img-title">替你踩坑，评测全网很火的三款数码产品！</div>
                            <div class="video-relate-card-img-play"></div>
                            <div class="video-relate-card-img-bottom"><span class="bottom-play">6次播放</span></div>
                            <div class="video-relate-card-img-app"><span class="app">打开APP</span></div>
                            <div class="card-shadow"></div>
                            <div class="card-title-shadow"></div>
                        </div>
                    </div>
                    <div class="video-relate-bottom">
                        <div class="video-relate-bottom-user wx-share-launch"><img
                                src="./details-mobile_files/d641a39f5e3883d2c540690a5c0e0681.jpeg"><span>动漫阿君</span>
                        </div>
                        <div class="video-relate-bottom-btns wx-share-launch"><span class="like"><i></i></span><span
                                class="comment"><i></i></span><span class="repley"><i></i></span><span
                                class="more"><i></i><i></i><i></i></span></div>
                    </div>
                </div>
                <div class="video-relate-card">
                    <div class="video-relate-card-img-new wx-share-launch">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=2812698391,1405124468&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="video-relate-card-img-bg">
                            <div class="video-relate-card-img-title">无花果盒做音响：哈曼卡顿传奇</div>
                            <div class="video-relate-card-img-play"></div>
                            <div class="video-relate-card-img-bottom"><span class="bottom-play">136次播放</span></div>
                            <div class="video-relate-card-img-app"><span class="app">打开APP</span></div>
                            <div class="card-shadow"></div>
                            <div class="card-title-shadow"></div>
                        </div>
                    </div>
                    <div class="video-relate-bottom">
                        <div class="video-relate-bottom-user wx-share-launch"><img
                                src="./details-mobile_files/15765011191dcef423a59de9574bf070fdae6ca383.jpg"><span>常路明</span>
                        </div>
                        <div class="video-relate-bottom-btns wx-share-launch"><span class="like"><i></i></span><span
                                class="comment"><i></i></span><span class="repley"><i></i></span><span
                                class="more"><i></i><i></i><i></i></span></div>
                    </div>
                </div>
                <div class="video-relate-card">
                    <div class="video-relate-card-img-new wx-share-launch">
                        <div class="hk-filter-earlybird">
                            <div style="z-index: 1; position: relative;"><img
                                    src="./details-mobile_files/u=3147865436,1721867333&amp;fm=222&amp;app=106&amp;f=JPEG@s_2,w_681,h_381,q_100">
                            </div>
                        </div>
                        <div class="video-relate-card-img-bg">
                            <div class="video-relate-card-img-title">资讯｜永诺第一支Z口85mmF1.8镜头3月11日上市｜授权转载自影像狗</div>
                            <div class="video-relate-card-img-play"></div>
                            <div class="video-relate-card-img-bottom"><span class="bottom-play">6次播放</span></div>
                            <div class="video-relate-card-img-app"><span class="app">打开APP</span></div>
                            <div class="card-shadow"></div>
                            <div class="card-title-shadow"></div>
                        </div>
                    </div>
                    <div class="video-relate-bottom">
                        <div class="video-relate-bottom-user wx-share-launch"><img
                                src="./details-mobile_files/8d1547d85001850b51e8a8fb38a49b8a.jpeg"><span>酷扯儿</span>
                        </div>
                        <div class="video-relate-bottom-btns wx-share-launch"><span class="like"><i></i></span><span
                                class="comment"><i></i></span><span class="repley"><i></i></span><span
                                class="more"><i></i><i></i><i></i></span></div>
                    </div>
                </div>
            </div>
            <div class="video-relate-list-more"><span class="text">点击查看更多</span><span class="icon"></span></div>
        </div>
        <div class="comment-module wx-share-launch" id="comment">
            <div class="comment-title">全部评论<div class="comment-total-num">(9)</div>
            </div>
            <div class="comment-default">
                <div class="comment-default-avatar"></div>
                <div class="comment-default-input">说点什么吧...</div>
            </div>
            <div class="comment-body">
                <div class="comment-item">
                    <div class="item-avatar"
                        style="background-image: url(&quot;https://himg.bdimg.com/sys/portrait/item/wise.1.e4f79beb.YA3lkk9W_UIL42SrTJ0wmw.jpg?time=9166&quot;);">
                    </div>
                    <div class="item-info">
                        <div class="info-head">
                            <div class="info-author">敬鹏鲲ZJ</div>
                        </div>
                        <div class="info-detail">
                            <div class="info-text">我用米沃奇2704，电锤2912，起子牧田022，已经强力工作几年了，不担心半路掉链子。</div>
                            <div class="detail-bar">
                                <div class="c-time">昨天</div>
                                <div class="info-like">
                                    <div class="reply-lead"><span class="reply-img"></span><span
                                            class="reply-txt">回复</span></div>
                                    <div class="like-lead"><span class="like-img"></span><span
                                            class="like-count">1</span></div>
                                </div>
                            </div>
                            <div class="reply-list">
                                <div class="left-border"></div>
                                <div class="right-content">
                                    <div class="react-slidedown transitioning"
                                        style="height: 41.4062px; transition-property: height;">
                                        <div class="replay-item"><span>小尹修工具：</span>都是好价格的东西，还有小日本的，你怕啥呀[AWSL]</div>
                                    </div>
                                    <div class="look-reply" style="display: none;"><span
                                            class="more-text more-down">查看全部1条回复</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="item-avatar"
                        style="background-image: url(&quot;https://himg.bdimg.com/sys/portrait/item/wise.1.44162357.1uSZ4C-N-v-24LTuesoWyg.jpg?time=4442&quot;);">
                    </div>
                    <div class="item-info">
                        <div class="info-head">
                            <div class="info-author">百味人生669</div>
                        </div>
                        <div class="info-detail">
                            <div class="info-text">这能打混凝土？</div>
                            <div class="detail-bar">
                                <div class="c-time">1天前</div>
                                <div class="info-like">
                                    <div class="reply-lead"><span class="reply-img"></span><span
                                            class="reply-txt">回复</span></div>
                                    <div class="like-lead"><span class="like-img"></span><span
                                            class="like-count">3</span></div>
                                </div>
                            </div>
                            <div class="reply-list">
                                <div class="left-border"></div>
                                <div class="right-content">
                                    <div class="react-slidedown transitioning"
                                        style="height: 69.3203px; transition-property: height;">
                                        <div class="replay-item"><span>小尹修工具：</span>肯定可以啊，就是少用，用力过大对电钻有损伤</div>
                                        <div class="replay-item"><span>小尹修工具：</span>加上三角钻头，就可以</div>
                                    </div>
                                    <div class="look-reply" style="display: flex;"><span
                                            class="more-text more-down">查看全部6条回复</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none;">
                <div class="hk-loading-container"
                    style="display: flex; flex-flow: row; justify-content: center; align-items: center; width: 100%; height: 50px;">
                    <div class="hk-lds-ring">
                        <div
                            style="border-width: 1px; border-style: solid; border-color: rgb(255, 0, 80) transparent transparent;">
                        </div>
                        <div
                            style="border-width: 1px; border-style: solid; border-color: rgb(255, 0, 80) transparent transparent;">
                        </div>
                        <div
                            style="border-width: 1px; border-style: solid; border-color: rgb(255, 0, 80) transparent transparent;">
                        </div>
                        <div
                            style="border-width: 1px; border-style: solid; border-color: rgb(255, 0, 80) transparent transparent;">
                        </div>
                    </div>
                    <div class="hk-lds-text"
                        style="font-size: 12px; color: rgb(51, 51, 51); font-family: PingFangTC-Regular; margin-left: 10px;">
                        正在加载</div>
                </div>
            </div>
            <div class="comment-open-app">打开好看APP，查看全部9评论</div>
        </div>
        <div class="open-app-bottom wx-share-launch">
            <div class="open-app-bottom-logo"><img src="./details-mobile_files/a8f12df5dde8.png" alt="logo"></div>
            <div class="open-app-bottom-open">打开</div>
        </div>
        <div class="open-button-wrap hide">
            <div class="open-app-button wx-share-launch"><img class="logo" src="./details-mobile_files/cf9bb534bb8e.png"
                    alt="">打开好看APP，查看全网热门视频</div>
        </div>
    </div>








</body>

</html>