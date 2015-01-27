/**
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${FIELD_NAME}()
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
