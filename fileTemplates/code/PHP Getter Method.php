/**
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${NAME}()
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
